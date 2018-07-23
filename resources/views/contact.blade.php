@extends('layouts.app')

@section('content')
    <section class="contact">
        <form class="contact__form">
            <div>
                <label for="">Name :</label>
                <input class="" type="text">
            </div>
            <div>
                <label for="">Email</label>
                <input type="text">
            </div>
            <div>
                <label for="">Reason to contact</label>
                <select name="" id="">
                    <option value="Account support">Account support</option>
                    <option value="Projects and Images Support">Projects and Images Support</option>
                    <option value="Partnership">Partnership</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div>
                <label for="">Your message :</label>
                <textarea name="" id=""></textarea>
            </div>
            <input type="submit" value="submit">
        </form>
    </section>

@endsection
