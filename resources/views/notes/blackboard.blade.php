<div class="blackboard container">
	<h1 class="text-center" style="margin-top:-30px;">Notes From Visitors</h1>
	<span class="chalk" style="left:75%; height:5px; width:25px;"></span>
	<span class="chalk" style="left:50%; height:8px; width:40px;"></span>
	<span class="chalk" style="left:10%; height:12px; width:35px; border-radius:6px;"></span>
	<span class="chalk" style="left:25%; height:6px; width:30px;"></span>
	@foreach($notes->reverse() as $note)
		<div class="sticky-note col-sm-3">
			<p>Note from {{$note->name}}<br>
				Written on: {{$note->created_at->format('m/d/y')}}</p>
			<p>{{$note->content}}</p>
		</div>
	@endforeach
</div>