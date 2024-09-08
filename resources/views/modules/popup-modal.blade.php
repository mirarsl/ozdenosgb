@push('modals')
<div class="modal fade" id="instaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" >
			<div class="modal-footer">
				<a href="" data-dismiss="modal" class="pull-left"><i class="fa fa-2x fa-close"></i></a>
			</div>
			<div class="modal-body text-center">
				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
						<a href="{{$module->url}}" title="{{$module->top}}">
							<img class="text-center img-responsive" src="{{asset($module->image)}}" alt="Yapay Zeka İş Güvenliği Uzmanı" title="{{$module->top}}"/>
						</a>
					</div>
				</div>
				<br/>
				<h2>{{$module->title}}</h2>
				{!! $module->text !!}
				
				<br/>
				<div class="social-networks">
     @if ($sharedContent['Social']->instagram != null)
					<a href="{{$sharedContent['Social']->instagram}}" class="instagram" target="_blank" title="{{setting('site.title')}} Instagram Hesabı"><i class="fa fa-3x fa-instagram"></i></a>
     @endif
     @if ($sharedContent['Social']->facebook != null)
					<a href="{{$sharedContent['Social']->facebook}}" class="facebook" target="_blank" title="{{setting('site.title')}} Facebook Hesabı"><i class="fa fa-3x fa-facebook"></i></a>
     @endif
     @if ($sharedContent['Social']->twitter != null)
					<a href="{{$sharedContent['Social']->twitter}}" class="twitter" target="_blank" title="{{setting('site.title')}} Twitter Hesabı"><i class="fa fa-3x fa-twitter"></i></a>
     @endif
     @if ($sharedContent['Social']->linkedin != null)
					<a href="{{$sharedContent['Social']->linkedin}}" class="linkedin" target="_blank" title="{{setting('site.title')}} linkedin Hesabı"><i class="fa fa-3x fa-linkedin"></i></a>
     @endif
     @if ($sharedContent['Social']->youtube != null)
					<a href="{{$sharedContent['Social']->youtube}}" class="youtube" target="_blank" title="{{setting('site.title')}} youtube Hesabı"><i class="fa fa-3x fa-youtube"></i></a>
     @endif
				</div>
				<br/>
			</div>
			
		</div>
	</div>
</div>
@endpush
@push('scripts')
<script>
	jQuery(document).ready(function() {
	   setTimeout(function() {
			$('#instaModal').modal('show');
	   }, 1000);
	});
</script>
@endpush