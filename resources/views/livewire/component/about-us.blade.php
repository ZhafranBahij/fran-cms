  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| About Us</h6>
            <h2>About Us</h2>
          </div>
          <div>
            <p>
              {{ $about_us->description }}
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-table">
            <ul>
              @foreach ($services as $service)
                <li>
                  <img src="{{ 'storage/'.$service->icon }}" alt="" style="max-width: 52px;">
                  <h4>{{ $service->title }}<br><span>{{ $service->description }}</span></h4>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>