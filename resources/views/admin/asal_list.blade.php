<div class="card-body">

    <br/>
    <br/>
    <table class="table table-bordered table-hover table-striped table-responsive-sm">
        <thead>
            <tr class="text-xs">
                <th>No</th>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>

            @php

            $i=1;

            @endphp
            @foreach($asal  as $in)
            <tr class="text-xs">
            <td>{{$i}}</td>
                <td>{{ $in->nama_tempat}}</td>
                <td>{{ $in->alamat }}</td>
                <td>

                <a href="/admin/asal/hapus/{{ $in->id }}" class=" fa fa-2x fa-trash text-danger"></a>

                </td>
            </tr>
            @php
               $i++;
            @endphp
            @endforeach


        </tbody>
    </table>
</div>
</div>
