@extends ('layouts/app')


@section ('content')
<div class="wrapper_new_paint_job_container">

  <div class="wrapper_header_title">
    <h1>JUAN'S AUTO PAINT</h1>
  </div>

  <div class="wrapper_menu">
    <a href="#" id="new_paint_job" class="a_select">NEW PAINT JOB</a>
    <a href="#" id="processing_paint_job" class="a_select">PAINT JOBS</a>
  </div>

  <div class="new_paint_job_container">

    <div class="new_paint_job_title">
      <h1>New Paint Job</h1>
    </div>

    <div class="new_paint_job_list_cars">
      <img class="left_car" src="{{ url('images/default_car.png') }}">
      <img class="arrow" src="{{ url('images/arrow.png') }}">
      <img class="right_car" src="{{ url('images/default_car.png') }}">
    </div>

  <form id="form_paint">
    @csrf
    <div class="wrapper_form">
      <div class="wrapper_form_title">
        <h3>Car Details</h3>
      </div>
      <div class="wrapper_form_details">
        <div class="block">
            <label>Plate No.</label>
            <input type="text" name="inp_plate_no"/>
        </div>
        <div class="block">
            <label>Current Color</label>
            <select name="inp_current_color" id="current_color">
              <option value="">--</option>
              <option value="0">Default</option>
              <option value="1">Red</option>
              <option value="2">Green</option>
              <option value="3">Blue</option>
            </select>
        </div>
        <div class="block">
            <label>Target Color</label>
            <select name="inp_target_color" id="target_color">
              <option value="">--</option>
              <option value="0">Default</option>
              <option value="1">Red</option>
              <option value="2">Green</option>
              <option value="3">Blue</option>
            </select>
        </div>

        <div class="wrapper_btn_submit">
          <button type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>

  </div>

  <div class="processing_paint_job_container">

    <div class="new_paint_job_title">
      <h1>Paint Job</h1>
    </div>

    <div class="paint_job_in_progress">
      <div class="paint_jobs_flex_wrapper">
        <div class="left_container">
          <h4>Paint Jobs in Progress</h4>
          <table>
            <tr>
              <th>Plate No.</th>
              <th>Current Color</th>
              <th>Target Color</th>
              <th>Action</th>
            </tr>
          </table>
        </div>
        <div class="right_container">
          <p>SHOP PERFORMANCE</p>
        </div>
        <div class="paint_job_details">
          <p class="total_cars_painted">Total Cars Painted</p>
          <p>Breakdown</p>
          <p class="total_blue">Blue</p>
          <p class="total_red">Red</p>
          <p class="total_green">Green</p
        </div>
      </div>
    </div>


    <div class="paint_job_in_queue">
      <h4>Paint Qeueue</h4>
      <table>
        <tr>
          <th>Plate No.</th>
          <th>Current Color</th>
          <th>Target Color</th>
        </tr>
      </table>
    </div>
  </div>



</div>

@endsection
