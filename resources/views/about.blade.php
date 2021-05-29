 @include("parts.common", ["title"=>"About - "])
 @include("parts.nav")
  {{-- @include("parts.header") --}}

{{-- Image showcases --}}
<section class="showcase">
  <div class="container-fluid p-0">
    <div class="row g-0">
      <div class="col-lg-10 order-lg-1 my-auto showcase-text">
        <h2>About Us</h2>
        <p class="lead ">
          This is just practice website.<br />
          Thank you for visiting!<br />
          Now is {{ $current_time }}. <br />
        </p>
          <ul class="list-group">
            <li class="list-group-item">Name: ABC Company</li>
            <li class="list-group-item">Address: LANE COVE WEST​, NEW SOUTH WALES, 2066</li>
            <li class="list-group-item">Company Description: ABC Company is located in LANE COVE WEST, NEW SOUTH WALES, Australia and is part of the Information Technology Services Industry.</li>
          </ul>

      </div>
    </div>
  </div>
</section>

@include("parts.footer")
