@extends('layouts.main')

@section('content')
<h1 class="mt-4">Reviews Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Reviews</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Reviews Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>review</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>film</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>review</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <th>Kimetsu no Yaiba</th>
                    <th>Koyoharu Gotouge</th>
                    <th>7.1</th>
                    <th>adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Koyoharu Gotōge. Ceritanya mengisahkan tentang Tanjiro Kamado, seorang anak laki-laki yang menjadi pembasmi iblis setelah keluarganya dibantai oleh iblis dan adik perempuannya yang bernama Nezuko diubah menjadi iblis.</th>
                    <th>2016</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <th>Pengabdi setan 2</th>
                    <th>Joko Anwar</th>
                    <th>9.7</th>
                    <th>Beberapa tahun setelah berhasil menyelamatkan diri dari kejadian mengerikan yang membuat mereka kehilangan ibu dan si bungsu Ian, Rini dan adik-adiknya, Toni dan Bondi, serta Bapak tinggal di rumah susun karena percaya tinggal di rumah susun aman jika terjadi sesuatu karena ada banyak orang. </th>
                    <th>2022</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <th>The Little Mermaid</th>
                    <th>Rob Marshall</th>
                    <th>9.1</th>
                    <th>Ariel, putri Raja Triton yang bungsu sekaligus yang paling membangkang, mendambakan untuk kenal lebih jauh kehidupan di atas laut, dan ketika sedang berkunjung ke daratan, ia jatuh cinta pada Pangeran Eric yang menawan. </th>
                    <th>2023</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <th>Alive</th>
                    <th>II Cho</th>
                    <th>7.5</th>
                    <th>Alive adalah sebuah film mayat hidup seru Korea Selatan tahun 2020 garapan Cho Il-hyung, dan menampilkan Yoo Ah-in dan Park Shin-hye. Film tersebut berdasarkan pada film Amerika Serikat tahun 2019 Alone karya Matt Naylor.</th>
                    <th>2020</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <th>Decibel</th>
                    <th>Hwang In-Ho</th>
                    <th>9.5</th>
                    <th>Mantan perwira Angkatan Laut, Do-yeong mengidap gangguan stres pascatrauma usai selamat dari kecelakaan kapal selam yang menewaskan rekan-rekannya. Sekalipun kini dipandang sebagai pahlawan oleh masyarakat, ia terus menyimpan rasa bersalah serta tersiksa oleh sikap keluarga yang menjauh darinya.</th>
                    <th>2022</th>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection 