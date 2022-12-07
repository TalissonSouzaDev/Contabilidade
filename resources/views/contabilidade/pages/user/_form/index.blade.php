@csrf
<div class="form-group">
    <label for=""><b>NOME:</b></label>
    <input type="text" name="name" class="form-control  @error('name') is-invalid  @enderror" value="{{$user->name ?? old("name")}}">

    @error('name')
    <div class="invalid-feedback">
           {{$message}}
    </div>
   @enderror
</div>

<div class="form-group">
       <label for=""><b>EMAIL:</b></label>
       <input type="email" name="email" class="form-control  @error('email') is-invalid  @enderror" value="{{$user->email ?? old("email")}}">
   
       @error('email')
       <div class="invalid-feedback">
              {{$message}}
       </div>
      @enderror
   </div>


   <div class="form-group">
       <label for=""><b>PASSWORD:</b></label>
       <input type="password" name="password" class="form-control  @error('password') is-invalid  @enderror" value="{{$user->password ?? old("password")}}">
   
       @error('password')
       <div class="invalid-feedback">
              {{$message}}
       </div>
      @enderror
   </div>

