@foreach ($comments as $item)
<div class="sender">
  <h6>{{ \App\Models\User::find($item->user_id)->name }} : </h6>
  <p>{{ $item->comment }}</p>
</div>
@endforeach