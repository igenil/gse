<div style="text-align:center;">
    <h1>PETITIONS LIST</h1>
</div>
<br>
<table class="table table-striped table-hover" style="width: 80%; text-align: left; margin: 0 auto;">
        <thead>
            <tr>
              <td>Company</td>
              <td>Grade</td>
              <td>Type</td>
              <td>Number students</td>
              <td>Date</td>
            </tr>
        </thead>
        <tbody>
        <!---@foreach($grades as $grade)
            <tr>
                <td>{{$grade->name}}</td>
                <td>{{$grade->level}}</td>
                <td style="width:1%;">
                <a href="editgrade/{{$grade->id}}">
                    <button class = "btn btn-primary"><span class="fas fa-pencil-alt" ></button></td>
                </a>
                <td style="width:1%;">
                <form action="grade/{{ $grade->id}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit"><span class="fas fa-trash-alt" ></button>
                </form>
                </td>
                </td>
            </tr>
            @endforeach--->