@extends('layouts.app')
 
@section('content')

<html>
    <center><h4 style="font-family:avenir;"><b> Task Details </b></h4> </center>
    </br>

   <body>
	 <div class="panel panel-default" style="font-family:avenir;">
           <div class="panel-body">
                <table class="table table-striped todo-table">
                    <!-- Table Body -->
                    <tbody>
                            <h4> <?php echo $name; ?> </h4>
                            <p style="color:grey; font-size:15px;"> <?php echo $description; ?>  </p> 
                            </tr>
                            </br>
                            <tr>
                                <button>
                                <a href="{{ route('todo.index') }}"> Back To List </a>
                               </button>               
                            </tr>
                    </tbody>
                </table>
            </div>
       </div>
   </body>
</html>
@endsection