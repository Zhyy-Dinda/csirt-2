@include('component.header')
<style>
    .text-gelap{
        color: rgb(0, 0, 0);
        font-family: sans-serif;
        font-size: 16px;
        font
    }
    .text-gelap:hover{
        color: blue;
        transition: .3s ease all;
    }
</style>
<section class="production pb-10 pb-md-14 border-bottom" id="bootstrap-demos">
  <div class="container">
    <div class="flex row mx-13 mt-8 justify-content-center">
      <h1 class="mb-8 text-center"><b>Panduan Penanganan Insiden Siber</b></h1>
      <div class="table">
        <table class="table mb-0">
            <h1>Data boongan</h1>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Size</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <?php
                    $no = 1;
                    ?>
                <tr>
                    <th scope="row">{{$dt->id}}</th>
                    <td><a class="text-gelap" href="">{{$dt->nama}}</a></td>
                    <td>{{$dt->size}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    {{$data->onEachSide(1)->links()}}
    </div>
  </div>
</section>

@include('component.menubar')
@include('component.script')
@include('component.footer')
