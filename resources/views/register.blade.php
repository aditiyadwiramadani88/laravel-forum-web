@include('layout.head')  

<div class="modal-wrap">
<div class="modal-bodies">
  <div class="modal-body modal-body-step-1 is-showing">
    <div class="title">Register</div>
    <form method="POST">
    @csrf
      <input type="text" placeholder="Name*"/ name="name" value="{{old('name')}}">
      @error('name')
        <small class="ml-2 text-danger">{{ $message }}</small>
      @enderror
      
      <input type="email" placeholder="E-Mail*"/ name="email" value="{{old('email')}}">
      @error('email')
        <small class="ml-2 text-danger">{{ $message }}</small>
      @enderror
        <input type="password" placeholder="Password*"/ name="password">
        @error('password')
        <small class="ml-2 text-danger">{{ $message }}</small>
      @enderror
          <input type="password" placeholder="Confirm Password*"/ name="password_confirmation">
          @error('password_confirmation')
        <small class="ml-2 text-danger">{{ $message }}</small>
      @enderror
      <div class="text-center">
        <input class="btn btn-primary button" type="submit" style="border: none;">
      </div>
    </form>
  </div>


</div>
</div>


@include('layout.fot')