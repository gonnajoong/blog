<article class="gj-main-layout gj-blog" id="gjBlog">
    <h1>참여 프로젝트</h1>
    <ul class="gj-project-icon-list">
        @foreach($projects['project'] as $key=>$projects)
            <li>
                <span>
                    <img src="#" alt="프로젝트 이미지, 아이콘"/>
                    <p>{{$projects['project_name']}}</p>
                    <span>제작 기간: {{$projects['period']}}</span>
                    <span>클라이언트 : {{$projects['client']}}</span>
                    <span>담당 역할: {{$projects['role']}}</span>
                </span>
            </li>
        @endforeach
    </ul>
</article>
