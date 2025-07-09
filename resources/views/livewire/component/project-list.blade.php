<div class="properties section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>| Projects</h6>
          <h2>We Provide The Best Projects You Like</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($projects as $project)
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="{{ 'storage/'.$project->thumbnail }}" alt=""></a>
            <span class="category">{{ $project->category }}</span>
            <h4><a href="property-details.html">{{ $project->name }}</a></h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio reiciendis laboriosam impedit. Facilis enim, nemo culpa explicabo, dolores, maxime consectetur possimus quod repudiandae laboriosam provident!
            </p>
            <div class="main-button">
              <a href="property-details.html">Detail</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>