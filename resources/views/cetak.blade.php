<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br><br>
        <h3 class="text-center">Data Penugasan</h3>
      
        <!-- /.card-header -->
        <div class="card-body">
           <table id="tasks" class="table table-bordered">
              <thead>
                 <tr>
                    <th style="width: 10px">No</th>
                    <th>ID Ruangan</th>
                    <th>ID CS</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                 </tr>
              </thead>
              <tbody>
                 @forelse($tasks as $key => $task)
                 <tr>
                    <td> {{ $key + 1 }} </td>
                    <td> {{ $task->nama }} </td>
                    <td> {{ $task->name }} </td>
                    <td> {{ $task->status }}</td>
                    <td> {{ $task->tanggal }}</td>
                 </tr>
                 @empty
                 <tr>
                    <td colspan="4" align="center">Belum ada Penugasan Hari Ini</td>
                 </tr>
                 @endforelse
              </tbody>
           </table>
        </div>
     </div>
     
</body>
</html>
