@extends('layouts.manage')



@section('content')

<div class="flex-container">
    <div class="flex-container m-t-30">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">View user Details</h1>
               
            </div>

            <div class="column">
                    <a href="{{route('users.edit', $user->id)}}" class="button is-primary pull-right"><i class="fa fa-user m-r-10"></i>Edit User</a>
            </div>

     </div>
     <hr class="m-t-10">

    <div class="columns">
        <div class="column">
        
        <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
            <pre>{{$user->name}}</pre>
            </p>
        </div>

        <div class="field">
                <label for="email" class="label">Email</label>
                <p class="control">
                <pre>{{$user->email}}</pre>
                </p>
        </div>

      

      
        </div>
    </div>

</div><!-- end of .flex-container-->

@endsection

@section('scripts')

<script>
var app = new Vue({
    el: '#app',
    data:{
        auto_password: true
    }
});   
</script>
@endsection