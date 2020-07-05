<?php
    namespace App\Http\Controllers;
    use App\Modeldatas;
    use Illuminate\Http\Request;
    use Validator;
    use Illuminate\Support\Facades\DB;

    class HomeController extends Controller
    {
        public function index () {
            $data = array(
                'data_jamaah' => Modeldatas::all()
            );
            return view ('home', $data);
        }

        public function detail ($idjamaah) {
            $data = array(
                'data_jamaah' => Modeldatas::find($idjamaah)
            );
            return view ('detail', $data);
        }

        public function tambah (Request $request) {

            $messages = [
                'required' => ':attribute wajib diisi !',
                'min' => ':attribute harus diisi minimal :min karakter',
                'max' => ':attribute harus diisi maksimal :max karakter',
                'unique' => ':attribute pada form ini telah dimiliki'
            ];

            if($request->isMethod('post')) {

                $request->validate([
                    'idjamaah'      => 'required|unique:data_jamaah|max:15',
                    'namajamaah'    => 'required|max:50',
                    'gender'        => 'required',
                    'telpjamaah'    => 'required|max:15'
                ], $messages);

                $data = array(
                    'idjamaah'      => $request->input('idjamaah'),
                    'namajamaah'    => $request->input('namajamaah'),
                    'gender'        => $request->input('gender'),
                    'telpjamaah'    => $request->input('telpjamaah')
                );

                $tambah = Modeldatas::insert($data);
                if($tambah) {
                    echo 'tambah data berhasil';
                } else {
                    echo 'tambah data gagal';
                }
            }
            return view('form');
        }

        public function ubah ($idjamaah, Request $request) {
            $data_jamaah = Modeldatas::find($idjamaah);

            $messages = [
                'required' => ':attribute wajib diisi !',
                'min' => ':attribute harus diisi minimal :min karakter',
                'max' => ':attribute harus diisi maksimal :max karakter',
                'unique' => ':attribute pada form ini telah dimiliki'
            ];

            if($request->isMethod('post')) {

                $request->validate([
                    'idjamaah'      => 'required|max:15',
                    'namajamaah'    => 'required|max:50',
                    'gender'        => 'required',
                    'telpjamaah'    => 'required|max:15'
                ], $messages);

                $data_jamaah->idjamaah      = $request->input('idjamaah');
                $data_jamaah->namajamaah    = $request->input('namajamaah');
                $data_jamaah->gender        = $request->input('gender');
                $data_jamaah->telpjamaah    = $request->input('telpjamaah');
                $ubah = $data_jamaah->save();
                if($ubah) {
                    echo 'Ubah Artikel Berhasil';
                }else {
                    echo 'Ubah Artikel Gagal';
                }
            }
            return view('form', array('data_jamaah' => $data_jamaah));
        }

        public function hapus ($idjamaah) {
            $data = Modeldatas::find($idjamaah);
            $hapus = $data->delete();
            if($hapus) {
                echo "<script>alert('Hapus Data Berhasil !')</script>";
                echo '<meta http-equiv="refresh" content="0;url='. url('/') .'">';
            }
        }
    }
?>