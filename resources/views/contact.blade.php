@extends('layout.template')

@section('title', '- Contact')

@section('carousel')
<h1 style="text-align: center;">Contact</h1>
@endsection

@section('content')
<div class="row justify-content-start">
    <div class="col-6" style="background-color: aliceblue;">
    	<h4>Contact Info</h4>
    	<br><br>
		<p>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  				<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
			</svg>
			021 - 78881112, ext- 234
		</p>
		<hr>
		<br>
		<p>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
				<path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
			</svg>
			Jl. Margonda Raya No.100,Beiji Depok
		</p>
		<hr>
		<br><br><br><br><br><br><br>
    </div>
    <div class="col-6">
    	<h4>Contact Form</h4>
    	<form>
			<label for="fname">Name:</label><br>
			<input type="text" id="fname" name="fname"><br>
			<label for="lname">Email:</label><br>
			<input type="text" id="lname" name="lname"><br>
			<label for="lname">Commenr or Message</label><br>
			<textarea rows="4" cols="50"></textarea><br>
			<button style="color:grey;">Submit</button>

		</form>
    </div>
</div>
@endsection