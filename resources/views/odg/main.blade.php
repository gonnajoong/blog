<section id="gjProjectWrap">
    <article class="gj-project-banner">
        <div class="gj-image-wrap odg"></div>
        <span class="gj-button-warp">
            <a class="gj-link-button" href="{{$project['project_page']}}" target="_blank">
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
                <button id="statePC" type="button" class="is-active">PC</button>
                <button id="stateMobile" type="button">Mobile</button>
            </div>
        </span>
        <ul id="imagePcWrap" class="gj-image-wrap is-visible">
            <li>
                <a href="/images/projects/odg/odg_01.jpg" target="_blank">
                    <img src="/images/projects/odg/odg_01.jpg" alt="page_image">
                </a>
            </li>
            <li>
                <a href="/images/projects/odg/odg_02.jpg" target="_blank">
                    <img src="/images/projects/odg/odg_02.jpg" alt="page_image">
                </a>
            </li>
        </ul>
        <ul id="imageMobileWrap" class="gj-image-wrap mobile-image">
            <li>
                <span>
                    <img src="/images/projects/odg/odg_01_m.jpg" alt="page_image">
                </span>
            </li>
            <li>
                <span>
                    <img src="/images/projects/odg/odg_02_m.jpg" alt="page_image">
                </span>
            </li>
        </ul>
    </article>
</section>
