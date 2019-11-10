@extends("layouts.app")

@section("content")
    <h1>Contact us</h1>

    <form method="post" action="{{route('contact-form-submit')}}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="txt_name">Name</label>
            <input type="text" class="form-control" id="txt_name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="txt_email">Email address</label>
            <input type="text" class="form-control" name="email" id="txt_email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="txt_subject">Subject</label>
            <input type="text" class="form-control" id="txt_subject" name="subject" placeholder="Enter subject">
        </div>

        <div class="form-group">
            <label for="txt_message">message</label>
            <textarea name="message" class="form-control" id="txt_message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection