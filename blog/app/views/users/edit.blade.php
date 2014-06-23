@section('main')
<h1>Edit user</h1>
{{Form::model($user,array('method'=>'PATCH','route'=>array('users.update',$user->id)))}}