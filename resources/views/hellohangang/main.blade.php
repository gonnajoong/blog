<section id="gjProjectWrap">
    <article class="gj-project-banner">
        <div class="gj-image-wrap hellohangang"></div>
        <span class="gj-button-warp">
            <a class="gj-link-button" href="https://play.google.com/store/apps/details?id=com.weather_api" target="_blank">
                <button type="button">
                    바로가기
                </button>
            </a>
        </span>
    </article>
    <article class="gj-project-title">
        <h2>{{$project['project_name']}}</h2>
        <span>
            <p><strong>기간</strong> - {{$project['project_period']}}</p>
            <p><strong>담당</strong> - {{$project['project_role']}}</p>
        </span>
    </article>
    <article class="gj-project-content">
        <span class="gj-state-button-wrap">
            <div>
                <button id="stateMobile" type="button" class="is-active">Mobile</button>
            </div>
        </span>
        <ul id="imageMobileWrap" class="gj-image-wrap mobile-image is-visible">
            <li>
                <span>
                    <img src="/images/projects/hellohangang/hellohangang_01m.jpg" alt="page_image">
                </span>
            </li>
            <li>
                <span>
                    <img src="/images/projects/hellohangang/hellohangang_02m.jpg" alt="page_image">
                </span>
            </li>
        </ul>
    </article>
</section>
