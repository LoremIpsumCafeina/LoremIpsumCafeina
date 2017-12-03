@extends('layouts.app') @section('content')
<style>
	body {
		background: white!important;
	}
</style>
<div class="container container-full">
	<div class="feed">
		<div class="card-div">
			<div class="ui card">
				<div class="content">
					<img class="ui avatar image" src="#"> <span style="color: #fb2a86;">Elliot</span><br>
                    <div class="left floated meta" style="margin-left: 35px;">14h</div>
				</div>
                <div>
                lorem Ipsum is simple dummy text of the printing and typesetting industry. Lorem ipsum has been
                </div><br>
				<div class="image">
					<img class="img-card" src="#">
				</div>
				<div class="content">
					<span class="right floated">
      <i class="heart outline like icon"></i>
      17 likes
    </span>
					<i class="comment icon"></i> 3 comments
				</div>
				<div class="extra content">
					<div class="ui large transparent left icon input">
						<i class="heart outline icon"></i>
						<input type="text" placeholder="Add Comment...">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="background-login"></div>
@endsection
<script>
	setTimeout(function(){
    document.querySelectorAll('body')[0].css('background', 'white');
},5000, function() {
    $('body').css('background','white');
});

</script>