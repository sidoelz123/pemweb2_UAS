@extends('main')

@section('content')
<div class="card mt-5 shadow">
            <div class="card-body">
                
                        <div class="card-title ">
                                <h5><b>Tambah Surat</b></h5>
                                <hr>
                        </div>
                       
                        <div class="form-group mt-2">
                            <p>Nomor Surat</p>
                             @csrf
                            <input type="text" class="form-control" id ="number_mail" name ="number_mail" placeholder="masukan nomor surat . . . ." required>
                        </div>
                        <div class="form-group mt-2">
                            <p for="nama">Tanggal Surat</p>
                            <input type="date" class="form-control" id ="date" name ="date" placeholder="masukan tanggal surat ...." required>
                        </div>
                        <div class="form-group mt-2">
                            <p for="prodi">Judul Surat</p>
                            <input type="text" class="form-control" id ="title" name ="title" placeholder="masukan judul surat . . . ." required>
                        </div>

                        <div class="text-center mt-5">
                            <Button id ="submit" name="submit" class="btn" style="background-color: #00dbde; color: aliceblue;" onclick="return confirm('Are you sure ?')">Save</Button>
                        </div>
                        @include('ajax/setup')
                        
                    </div>
                   
            </div>
          </div>
@endsection