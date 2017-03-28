<div class="row">
  {!! Form::open(['route'=>'tenders.store','method'=>'post','class'=>'col s12']) !!}
    <div class="row">
      <div class="input-field col s6">
        <input id="bid_name" type="text" name="bid_name" class="validate">
        <label for="bid_name">Tender Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <label>Closing Date</label>
        <input id="closing" type="date" name="closing" class="datepicker">
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <textarea id="textarea" name="description"class="materialize-textarea"></textarea>
        <label for="textarea">Description</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="submit" name="submit" value="submit tender" class="btn"/>
      </div>
    </div>

  {!! Form::close() !!}
</div>
