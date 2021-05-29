 @include("parts.common", ["title"=>"About - "])
 @include("parts.nav")
  {{-- @include("parts.header") --}}

{{-- Image showcases --}}
<section class="showcase">
  <div class="container-fluid p-0">
    <div class="row g-0">
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>About Us</h2>
        <p class="lead mb-0">
          This is ABC Company.<br />
          Now is {{ $current_time }}. <br />

          <ul>
            <li>Name: ABC Company</li>
            <li>Address: LANE COVE WEST​, NEW SOUTH WALES, 2066</li>
            <li>Company Description: ABC Company is located in LANE COVE WEST, NEW SOUTH WALES, Australia and is part of the Information Technology Services Industry.</li>
          </ul>
        </p>
      </div>
    </div>
  </div>
</section>

@include("parts.footer")
