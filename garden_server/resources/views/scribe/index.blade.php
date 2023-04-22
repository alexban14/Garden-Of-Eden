<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Garden Of Eden Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.18.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.18.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-articles">
                                <a href="#endpoints-GETapi-v1-articles">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-articles--id-">
                                <a href="#endpoints-GETapi-v1-articles--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-articles">
                                <a href="#endpoints-POSTapi-v1-articles">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-articles--id-">
                                <a href="#endpoints-PATCHapi-v1-articles--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-articles--id-">
                                <a href="#endpoints-DELETEapi-v1-articles--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-comments">
                                <a href="#endpoints-GETapi-v1-comments">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-comments--id-">
                                <a href="#endpoints-GETapi-v1-comments--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-comments">
                                <a href="#endpoints-POSTapi-v1-comments">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-comments--id-">
                                <a href="#endpoints-PATCHapi-v1-comments--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-comments--id-">
                                <a href="#endpoints-DELETEapi-v1-comments--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-prizes">
                                <a href="#endpoints-GETapi-v1-prizes">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-prizes--id-">
                                <a href="#endpoints-GETapi-v1-prizes--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-prizes">
                                <a href="#endpoints-POSTapi-v1-prizes">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-prizes--id-">
                                <a href="#endpoints-PATCHapi-v1-prizes--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-prizes--id-">
                                <a href="#endpoints-DELETEapi-v1-prizes--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-subscribers">
                                <a href="#endpoints-GETapi-v1-subscribers">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-subscribers--id-">
                                <a href="#endpoints-GETapi-v1-subscribers--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-subscribers">
                                <a href="#endpoints-POSTapi-v1-subscribers">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-subscribers--id-">
                                <a href="#endpoints-PATCHapi-v1-subscribers--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-subscribers--id-">
                                <a href="#endpoints-DELETEapi-v1-subscribers--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-management">
                    <a href="#user-management">User Management</a>
                </li>
                                    <ul id="tocify-subheader-user-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-management-GETapi-v1-users">
                                <a href="#user-management-GETapi-v1-users">Display a list of users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-GETapi-v1-users--id-">
                                <a href="#user-management-GETapi-v1-users--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTapi-v1-users">
                                <a href="#user-management-POSTapi-v1-users">Store a newly created resource in storage</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-PATCHapi-v1-users--id-">
                                <a href="#user-management-PATCHapi-v1-users--id-">Update the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-DELETEapi-v1-users--id-">
                                <a href="#user-management-DELETEapi-v1-users--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 22, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-articles">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/articles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/articles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-articles">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Prof.&quot;,
            &quot;body&quot;: [
                &quot;nihil&quot;,
                &quot;fuga&quot;,
                &quot;exercitationem&quot;,
                &quot;et&quot;,
                &quot;occaecati&quot;,
                &quot;et&quot;,
                &quot;quibusdam&quot;,
                &quot;enim&quot;,
                &quot;voluptatem&quot;,
                &quot;qui&quot;,
                &quot;aut&quot;,
                &quot;maiores&quot;,
                &quot;ex&quot;,
                &quot;nemo&quot;,
                &quot;dicta&quot;,
                &quot;sunt&quot;,
                &quot;esse&quot;,
                &quot;itaque&quot;,
                &quot;qui&quot;,
                &quot;sed&quot;,
                &quot;quo&quot;,
                &quot;debitis&quot;,
                &quot;ullam&quot;,
                &quot;maxime&quot;,
                &quot;voluptatem&quot;,
                &quot;modi&quot;,
                &quot;enim&quot;,
                &quot;nisi&quot;,
                &quot;vero&quot;,
                &quot;earum&quot;,
                &quot;facilis&quot;,
                &quot;sunt&quot;,
                &quot;id&quot;,
                &quot;odit&quot;,
                &quot;laborum&quot;,
                &quot;tenetur&quot;,
                &quot;impedit&quot;,
                &quot;aut&quot;,
                &quot;perferendis&quot;,
                &quot;deserunt&quot;,
                &quot;sed&quot;,
                &quot;maiores&quot;,
                &quot;enim&quot;,
                &quot;est&quot;,
                &quot;cumque&quot;,
                &quot;tempore&quot;,
                &quot;sed&quot;,
                &quot;fugit&quot;,
                &quot;deleniti&quot;,
                &quot;nemo&quot;,
                &quot;voluptas&quot;,
                &quot;voluptas&quot;,
                &quot;porro&quot;,
                &quot;corporis&quot;,
                &quot;non&quot;,
                &quot;amet&quot;,
                &quot;molestiae&quot;,
                &quot;sed&quot;,
                &quot;ullam&quot;,
                &quot;porro&quot;,
                &quot;quaerat&quot;,
                &quot;qui&quot;,
                &quot;quam&quot;,
                &quot;ut&quot;,
                &quot;et&quot;,
                &quot;qui&quot;,
                &quot;iste&quot;,
                &quot;adipisci&quot;,
                &quot;adipisci&quot;,
                &quot;in&quot;,
                &quot;odio&quot;,
                &quot;nam&quot;,
                &quot;ea&quot;,
                &quot;ut&quot;,
                &quot;et&quot;,
                &quot;incidunt&quot;,
                &quot;expedita&quot;,
                &quot;ad&quot;,
                &quot;quae&quot;,
                &quot;eius&quot;,
                &quot;incidunt&quot;,
                &quot;maxime&quot;,
                &quot;non&quot;,
                &quot;vel&quot;,
                &quot;iusto&quot;,
                &quot;a&quot;,
                &quot;dolor&quot;,
                &quot;in&quot;,
                &quot;fugit&quot;,
                &quot;aliquam&quot;,
                &quot;qui&quot;,
                &quot;maiores&quot;,
                &quot;quia&quot;,
                &quot;natus&quot;,
                &quot;quis&quot;,
                &quot;qui&quot;,
                &quot;qui&quot;,
                &quot;ut&quot;,
                &quot;pariatur&quot;,
                &quot;ut&quot;
            ],
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/002255?text=repellat&quot;,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;Mr.&quot;,
            &quot;body&quot;: [
                &quot;quam&quot;,
                &quot;perferendis&quot;,
                &quot;nostrum&quot;,
                &quot;in&quot;,
                &quot;est&quot;,
                &quot;aliquam&quot;,
                &quot;in&quot;,
                &quot;placeat&quot;,
                &quot;tempora&quot;,
                &quot;quia&quot;,
                &quot;doloremque&quot;,
                &quot;qui&quot;,
                &quot;rerum&quot;,
                &quot;quis&quot;,
                &quot;et&quot;,
                &quot;error&quot;,
                &quot;sunt&quot;,
                &quot;in&quot;,
                &quot;est&quot;,
                &quot;numquam&quot;,
                &quot;inventore&quot;,
                &quot;consequuntur&quot;,
                &quot;consectetur&quot;,
                &quot;aut&quot;,
                &quot;sequi&quot;,
                &quot;illum&quot;,
                &quot;qui&quot;,
                &quot;culpa&quot;,
                &quot;eius&quot;,
                &quot;quam&quot;,
                &quot;qui&quot;,
                &quot;laborum&quot;,
                &quot;aut&quot;,
                &quot;error&quot;,
                &quot;rerum&quot;,
                &quot;nisi&quot;,
                &quot;dolores&quot;,
                &quot;amet&quot;,
                &quot;qui&quot;,
                &quot;non&quot;,
                &quot;autem&quot;,
                &quot;qui&quot;,
                &quot;temporibus&quot;,
                &quot;illo&quot;,
                &quot;tempore&quot;,
                &quot;quod&quot;,
                &quot;et&quot;,
                &quot;incidunt&quot;,
                &quot;aperiam&quot;,
                &quot;sit&quot;,
                &quot;sunt&quot;,
                &quot;incidunt&quot;,
                &quot;maiores&quot;,
                &quot;recusandae&quot;,
                &quot;accusantium&quot;,
                &quot;sit&quot;,
                &quot;minima&quot;,
                &quot;magnam&quot;,
                &quot;repellendus&quot;,
                &quot;quis&quot;,
                &quot;aut&quot;,
                &quot;reprehenderit&quot;,
                &quot;totam&quot;,
                &quot;voluptatem&quot;,
                &quot;vitae&quot;,
                &quot;tempora&quot;,
                &quot;ut&quot;,
                &quot;non&quot;,
                &quot;et&quot;,
                &quot;itaque&quot;,
                &quot;voluptatibus&quot;,
                &quot;quis&quot;,
                &quot;quia&quot;,
                &quot;est&quot;,
                &quot;ea&quot;,
                &quot;ipsum&quot;,
                &quot;aliquid&quot;,
                &quot;consequatur&quot;,
                &quot;aperiam&quot;,
                &quot;voluptatem&quot;,
                &quot;iure&quot;,
                &quot;voluptatem&quot;,
                &quot;distinctio&quot;,
                &quot;esse&quot;,
                &quot;animi&quot;,
                &quot;exercitationem&quot;,
                &quot;fugit&quot;,
                &quot;earum&quot;,
                &quot;consequatur&quot;,
                &quot;non&quot;,
                &quot;perferendis&quot;,
                &quot;deleniti&quot;,
                &quot;et&quot;,
                &quot;quia&quot;,
                &quot;ut&quot;,
                &quot;inventore&quot;,
                &quot;incidunt&quot;,
                &quot;rem&quot;,
                &quot;consequatur&quot;,
                &quot;consequatur&quot;
            ],
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00aacc?text=qui&quot;,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;title&quot;: &quot;Dr.&quot;,
            &quot;body&quot;: [
                &quot;animi&quot;,
                &quot;voluptate&quot;,
                &quot;aut&quot;,
                &quot;accusantium&quot;,
                &quot;sunt&quot;,
                &quot;velit&quot;,
                &quot;voluptas&quot;,
                &quot;rerum&quot;,
                &quot;cum&quot;,
                &quot;esse&quot;,
                &quot;quae&quot;,
                &quot;exercitationem&quot;,
                &quot;cupiditate&quot;,
                &quot;nesciunt&quot;,
                &quot;provident&quot;,
                &quot;aut&quot;,
                &quot;dolorem&quot;,
                &quot;cumque&quot;,
                &quot;inventore&quot;,
                &quot;temporibus&quot;,
                &quot;et&quot;,
                &quot;voluptas&quot;,
                &quot;deleniti&quot;,
                &quot;qui&quot;,
                &quot;iure&quot;,
                &quot;eveniet&quot;,
                &quot;animi&quot;,
                &quot;ut&quot;,
                &quot;non&quot;,
                &quot;rerum&quot;,
                &quot;vel&quot;,
                &quot;dolores&quot;,
                &quot;vero&quot;,
                &quot;et&quot;,
                &quot;ad&quot;,
                &quot;delectus&quot;,
                &quot;adipisci&quot;,
                &quot;tempora&quot;,
                &quot;dolorem&quot;,
                &quot;corrupti&quot;,
                &quot;pariatur&quot;,
                &quot;omnis&quot;,
                &quot;ipsa&quot;,
                &quot;eum&quot;,
                &quot;cum&quot;,
                &quot;sit&quot;,
                &quot;omnis&quot;,
                &quot;totam&quot;,
                &quot;porro&quot;,
                &quot;ullam&quot;,
                &quot;ducimus&quot;,
                &quot;impedit&quot;,
                &quot;nostrum&quot;,
                &quot;facere&quot;,
                &quot;hic&quot;,
                &quot;sint&quot;,
                &quot;error&quot;,
                &quot;asperiores&quot;,
                &quot;explicabo&quot;,
                &quot;veniam&quot;,
                &quot;temporibus&quot;,
                &quot;a&quot;,
                &quot;labore&quot;,
                &quot;dolor&quot;,
                &quot;excepturi&quot;,
                &quot;esse&quot;,
                &quot;doloribus&quot;,
                &quot;et&quot;,
                &quot;adipisci&quot;,
                &quot;porro&quot;,
                &quot;blanditiis&quot;,
                &quot;rerum&quot;,
                &quot;doloremque&quot;,
                &quot;fugit&quot;,
                &quot;excepturi&quot;,
                &quot;vel&quot;,
                &quot;dolorem&quot;,
                &quot;et&quot;,
                &quot;expedita&quot;,
                &quot;qui&quot;,
                &quot;aut&quot;,
                &quot;natus&quot;,
                &quot;dolores&quot;,
                &quot;occaecati&quot;,
                &quot;ut&quot;,
                &quot;et&quot;,
                &quot;sit&quot;,
                &quot;quo&quot;,
                &quot;perferendis&quot;,
                &quot;veniam&quot;,
                &quot;enim&quot;,
                &quot;laudantium&quot;,
                &quot;sed&quot;,
                &quot;eaque&quot;,
                &quot;ea&quot;,
                &quot;aliquid&quot;,
                &quot;aspernatur&quot;,
                &quot;ipsum&quot;,
                &quot;vero&quot;,
                &quot;totam&quot;
            ],
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ee11?text=blanditiis&quot;,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;Prof.&quot;,
            &quot;body&quot;: [
                &quot;qui&quot;,
                &quot;pariatur&quot;,
                &quot;autem&quot;,
                &quot;quia&quot;,
                &quot;deserunt&quot;,
                &quot;porro&quot;,
                &quot;at&quot;,
                &quot;cumque&quot;,
                &quot;et&quot;,
                &quot;sint&quot;,
                &quot;veniam&quot;,
                &quot;rerum&quot;,
                &quot;at&quot;,
                &quot;laboriosam&quot;,
                &quot;et&quot;,
                &quot;impedit&quot;,
                &quot;placeat&quot;,
                &quot;inventore&quot;,
                &quot;tempora&quot;,
                &quot;quia&quot;,
                &quot;iusto&quot;,
                &quot;reprehenderit&quot;,
                &quot;illum&quot;,
                &quot;provident&quot;,
                &quot;quia&quot;,
                &quot;esse&quot;,
                &quot;dolore&quot;,
                &quot;autem&quot;,
                &quot;aliquam&quot;,
                &quot;ut&quot;,
                &quot;pariatur&quot;,
                &quot;eligendi&quot;,
                &quot;nihil&quot;,
                &quot;voluptate&quot;,
                &quot;nisi&quot;,
                &quot;est&quot;,
                &quot;quia&quot;,
                &quot;sapiente&quot;,
                &quot;fuga&quot;,
                &quot;aut&quot;,
                &quot;vitae&quot;,
                &quot;perferendis&quot;,
                &quot;aut&quot;,
                &quot;sit&quot;,
                &quot;est&quot;,
                &quot;cumque&quot;,
                &quot;voluptatibus&quot;,
                &quot;illo&quot;,
                &quot;ut&quot;,
                &quot;ut&quot;,
                &quot;consequuntur&quot;,
                &quot;sequi&quot;,
                &quot;blanditiis&quot;,
                &quot;voluptas&quot;,
                &quot;ea&quot;,
                &quot;vel&quot;,
                &quot;eveniet&quot;,
                &quot;placeat&quot;,
                &quot;porro&quot;,
                &quot;omnis&quot;,
                &quot;eum&quot;,
                &quot;saepe&quot;,
                &quot;cumque&quot;,
                &quot;debitis&quot;,
                &quot;qui&quot;,
                &quot;iusto&quot;,
                &quot;corporis&quot;,
                &quot;architecto&quot;,
                &quot;enim&quot;,
                &quot;sed&quot;,
                &quot;earum&quot;,
                &quot;sit&quot;,
                &quot;autem&quot;,
                &quot;quis&quot;,
                &quot;asperiores&quot;,
                &quot;alias&quot;,
                &quot;quam&quot;,
                &quot;consequatur&quot;,
                &quot;odit&quot;,
                &quot;deleniti&quot;,
                &quot;voluptas&quot;,
                &quot;repellat&quot;,
                &quot;dolores&quot;,
                &quot;voluptatum&quot;,
                &quot;eveniet&quot;,
                &quot;debitis&quot;,
                &quot;error&quot;,
                &quot;et&quot;,
                &quot;quae&quot;,
                &quot;odio&quot;,
                &quot;in&quot;,
                &quot;minus&quot;,
                &quot;atque&quot;,
                &quot;corrupti&quot;,
                &quot;ut&quot;,
                &quot;atque&quot;,
                &quot;atque&quot;,
                &quot;perferendis&quot;,
                &quot;error&quot;,
                &quot;et&quot;
            ],
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/007766?text=minima&quot;,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;Prof.&quot;,
            &quot;body&quot;: [
                &quot;quas&quot;,
                &quot;eos&quot;,
                &quot;rerum&quot;,
                &quot;alias&quot;,
                &quot;aut&quot;,
                &quot;eligendi&quot;,
                &quot;doloribus&quot;,
                &quot;harum&quot;,
                &quot;alias&quot;,
                &quot;vero&quot;,
                &quot;earum&quot;,
                &quot;voluptatem&quot;,
                &quot;suscipit&quot;,
                &quot;voluptatem&quot;,
                &quot;ut&quot;,
                &quot;ut&quot;,
                &quot;asperiores&quot;,
                &quot;totam&quot;,
                &quot;ut&quot;,
                &quot;et&quot;,
                &quot;illum&quot;,
                &quot;provident&quot;,
                &quot;aliquam&quot;,
                &quot;rerum&quot;,
                &quot;consequatur&quot;,
                &quot;eligendi&quot;,
                &quot;ea&quot;,
                &quot;voluptatum&quot;,
                &quot;adipisci&quot;,
                &quot;exercitationem&quot;,
                &quot;voluptatum&quot;,
                &quot;et&quot;,
                &quot;dolores&quot;,
                &quot;minima&quot;,
                &quot;tenetur&quot;,
                &quot;ad&quot;,
                &quot;ullam&quot;,
                &quot;sequi&quot;,
                &quot;accusantium&quot;,
                &quot;ut&quot;,
                &quot;reiciendis&quot;,
                &quot;aperiam&quot;,
                &quot;corrupti&quot;,
                &quot;aut&quot;,
                &quot;voluptas&quot;,
                &quot;nesciunt&quot;,
                &quot;maxime&quot;,
                &quot;a&quot;,
                &quot;minus&quot;,
                &quot;vitae&quot;,
                &quot;modi&quot;,
                &quot;ullam&quot;,
                &quot;qui&quot;,
                &quot;numquam&quot;,
                &quot;nobis&quot;,
                &quot;quisquam&quot;,
                &quot;quis&quot;,
                &quot;quia&quot;,
                &quot;sunt&quot;,
                &quot;commodi&quot;,
                &quot;aperiam&quot;,
                &quot;perferendis&quot;,
                &quot;dolor&quot;,
                &quot;quibusdam&quot;,
                &quot;minima&quot;,
                &quot;explicabo&quot;,
                &quot;quaerat&quot;,
                &quot;et&quot;,
                &quot;ipsam&quot;,
                &quot;quia&quot;,
                &quot;cupiditate&quot;,
                &quot;doloremque&quot;,
                &quot;deleniti&quot;,
                &quot;fugit&quot;,
                &quot;voluptas&quot;,
                &quot;non&quot;,
                &quot;qui&quot;,
                &quot;sint&quot;,
                &quot;repudiandae&quot;,
                &quot;sint&quot;,
                &quot;voluptatem&quot;,
                &quot;vel&quot;,
                &quot;mollitia&quot;,
                &quot;dignissimos&quot;,
                &quot;fugiat&quot;,
                &quot;corporis&quot;,
                &quot;vero&quot;,
                &quot;explicabo&quot;,
                &quot;suscipit&quot;,
                &quot;fugiat&quot;,
                &quot;sapiente&quot;,
                &quot;nihil&quot;,
                &quot;eligendi&quot;,
                &quot;harum&quot;,
                &quot;quasi&quot;,
                &quot;ipsa&quot;,
                &quot;itaque&quot;,
                &quot;inventore&quot;,
                &quot;ut&quot;,
                &quot;et&quot;
            ],
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00aacc?text=labore&quot;,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;Self care &amp; health&quot;,
            &quot;body&quot;: &quot;Article on self care and personal health&quot;,
            &quot;image&quot;: &quot;slefCareImage&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T09:02:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T09:13:16.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/v1/articles?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/v1/articles?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/articles?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/v1/articles&quot;,
        &quot;per_page&quot;: 20,
        &quot;to&quot;: 6,
        &quot;total&quot;: 6
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-articles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-articles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-articles" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-articles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-articles"></code></pre>
</span>
<form id="form-GETapi-v1-articles" data-method="GET"
      data-path="api/v1/articles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-articles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-articles"
                    onclick="tryItOut('GETapi-v1-articles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-articles"
                    onclick="cancelTryOut('GETapi-v1-articles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-articles" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/articles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-articles--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/articles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/articles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-articles--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;Prof.&quot;,
        &quot;body&quot;: [
            &quot;nihil&quot;,
            &quot;fuga&quot;,
            &quot;exercitationem&quot;,
            &quot;et&quot;,
            &quot;occaecati&quot;,
            &quot;et&quot;,
            &quot;quibusdam&quot;,
            &quot;enim&quot;,
            &quot;voluptatem&quot;,
            &quot;qui&quot;,
            &quot;aut&quot;,
            &quot;maiores&quot;,
            &quot;ex&quot;,
            &quot;nemo&quot;,
            &quot;dicta&quot;,
            &quot;sunt&quot;,
            &quot;esse&quot;,
            &quot;itaque&quot;,
            &quot;qui&quot;,
            &quot;sed&quot;,
            &quot;quo&quot;,
            &quot;debitis&quot;,
            &quot;ullam&quot;,
            &quot;maxime&quot;,
            &quot;voluptatem&quot;,
            &quot;modi&quot;,
            &quot;enim&quot;,
            &quot;nisi&quot;,
            &quot;vero&quot;,
            &quot;earum&quot;,
            &quot;facilis&quot;,
            &quot;sunt&quot;,
            &quot;id&quot;,
            &quot;odit&quot;,
            &quot;laborum&quot;,
            &quot;tenetur&quot;,
            &quot;impedit&quot;,
            &quot;aut&quot;,
            &quot;perferendis&quot;,
            &quot;deserunt&quot;,
            &quot;sed&quot;,
            &quot;maiores&quot;,
            &quot;enim&quot;,
            &quot;est&quot;,
            &quot;cumque&quot;,
            &quot;tempore&quot;,
            &quot;sed&quot;,
            &quot;fugit&quot;,
            &quot;deleniti&quot;,
            &quot;nemo&quot;,
            &quot;voluptas&quot;,
            &quot;voluptas&quot;,
            &quot;porro&quot;,
            &quot;corporis&quot;,
            &quot;non&quot;,
            &quot;amet&quot;,
            &quot;molestiae&quot;,
            &quot;sed&quot;,
            &quot;ullam&quot;,
            &quot;porro&quot;,
            &quot;quaerat&quot;,
            &quot;qui&quot;,
            &quot;quam&quot;,
            &quot;ut&quot;,
            &quot;et&quot;,
            &quot;qui&quot;,
            &quot;iste&quot;,
            &quot;adipisci&quot;,
            &quot;adipisci&quot;,
            &quot;in&quot;,
            &quot;odio&quot;,
            &quot;nam&quot;,
            &quot;ea&quot;,
            &quot;ut&quot;,
            &quot;et&quot;,
            &quot;incidunt&quot;,
            &quot;expedita&quot;,
            &quot;ad&quot;,
            &quot;quae&quot;,
            &quot;eius&quot;,
            &quot;incidunt&quot;,
            &quot;maxime&quot;,
            &quot;non&quot;,
            &quot;vel&quot;,
            &quot;iusto&quot;,
            &quot;a&quot;,
            &quot;dolor&quot;,
            &quot;in&quot;,
            &quot;fugit&quot;,
            &quot;aliquam&quot;,
            &quot;qui&quot;,
            &quot;maiores&quot;,
            &quot;quia&quot;,
            &quot;natus&quot;,
            &quot;quis&quot;,
            &quot;qui&quot;,
            &quot;qui&quot;,
            &quot;ut&quot;,
            &quot;pariatur&quot;,
            &quot;ut&quot;
        ],
        &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/002255?text=repellat&quot;,
        &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-articles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-articles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-articles--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-articles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-articles--id-"></code></pre>
</span>
<form id="form-GETapi-v1-articles--id-" data-method="GET"
      data-path="api/v1/articles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-articles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-articles--id-"
                    onclick="tryItOut('GETapi-v1-articles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-articles--id-"
                    onclick="cancelTryOut('GETapi-v1-articles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-articles--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/articles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-articles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-articles">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-articles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/articles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"ex\",
    \"body\": \"rerum\",
    \"image\": \"molestias\",
    \"user_id\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/articles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "ex",
    "body": "rerum",
    "image": "molestias",
    "user_id": 1
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-articles">
</span>
<span id="execution-results-POSTapi-v1-articles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-articles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-articles" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-articles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-articles"></code></pre>
</span>
<form id="form-POSTapi-v1-articles" data-method="POST"
      data-path="api/v1/articles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-articles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-articles"
                    onclick="tryItOut('POSTapi-v1-articles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-articles"
                    onclick="cancelTryOut('POSTapi-v1-articles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-articles" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/articles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="title"                data-endpoint="POSTapi-v1-articles"
               value="ex"
               data-component="body">
    <br>
<p>Example: <code>ex</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="body"                data-endpoint="POSTapi-v1-articles"
               value="rerum"
               data-component="body">
    <br>
<p>Example: <code>rerum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="image"                data-endpoint="POSTapi-v1-articles"
               value="molestias"
               data-component="body">
    <br>
<p>Example: <code>molestias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="user_id"                data-endpoint="POSTapi-v1-articles"
               value="1"
               data-component="body">
    <br>
<p>Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-articles--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-articles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/v1/articles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"qui\",
    \"body\": \"debitis\",
    \"image\": \"dolore\",
    \"user_id\": 18
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/articles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "qui",
    "body": "debitis",
    "image": "dolore",
    "user_id": 18
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-articles--id-">
</span>
<span id="execution-results-PATCHapi-v1-articles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-articles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-articles--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-articles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-articles--id-"></code></pre>
</span>
<form id="form-PATCHapi-v1-articles--id-" data-method="PATCH"
      data-path="api/v1/articles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-articles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-articles--id-"
                    onclick="tryItOut('PATCHapi-v1-articles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-articles--id-"
                    onclick="cancelTryOut('PATCHapi-v1-articles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-articles--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/articles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PATCHapi-v1-articles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="title"                data-endpoint="PATCHapi-v1-articles--id-"
               value="qui"
               data-component="body">
    <br>
<p>Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="body"                data-endpoint="PATCHapi-v1-articles--id-"
               value="debitis"
               data-component="body">
    <br>
<p>Example: <code>debitis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="image"                data-endpoint="PATCHapi-v1-articles--id-"
               value="dolore"
               data-component="body">
    <br>
<p>Example: <code>dolore</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="user_id"                data-endpoint="PATCHapi-v1-articles--id-"
               value="18"
               data-component="body">
    <br>
<p>Example: <code>18</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-v1-articles--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-articles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/articles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/articles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-articles--id-">
</span>
<span id="execution-results-DELETEapi-v1-articles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-articles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-articles--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-articles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-articles--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-articles--id-" data-method="DELETE"
      data-path="api/v1/articles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-articles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-articles--id-"
                    onclick="tryItOut('DELETEapi-v1-articles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-articles--id-"
                    onclick="cancelTryOut('DELETEapi-v1-articles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-articles--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/articles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-articles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-comments">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-comments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/comments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/comments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-comments">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;body&quot;: [
                &quot;voluptatibus&quot;,
                &quot;et&quot;,
                &quot;corrupti&quot;,
                &quot;nam&quot;,
                &quot;quos&quot;,
                &quot;et&quot;,
                &quot;adipisci&quot;,
                &quot;et&quot;,
                &quot;delectus&quot;,
                &quot;numquam&quot;
            ],
            &quot;user_id&quot;: 3,
            &quot;article_id&quot;: 2,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;body&quot;: [
                &quot;sunt&quot;,
                &quot;sed&quot;,
                &quot;fugit&quot;,
                &quot;cumque&quot;,
                &quot;fugit&quot;,
                &quot;soluta&quot;,
                &quot;in&quot;,
                &quot;cumque&quot;,
                &quot;nobis&quot;,
                &quot;officia&quot;
            ],
            &quot;user_id&quot;: 4,
            &quot;article_id&quot;: 1,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;body&quot;: [
                &quot;adipisci&quot;,
                &quot;et&quot;,
                &quot;reiciendis&quot;,
                &quot;sint&quot;,
                &quot;accusantium&quot;,
                &quot;nihil&quot;,
                &quot;magnam&quot;,
                &quot;sequi&quot;,
                &quot;eos&quot;,
                &quot;harum&quot;
            ],
            &quot;user_id&quot;: 2,
            &quot;article_id&quot;: 2,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;body&quot;: [
                &quot;laborum&quot;,
                &quot;veniam&quot;,
                &quot;alias&quot;,
                &quot;nobis&quot;,
                &quot;tempora&quot;,
                &quot;quis&quot;,
                &quot;accusantium&quot;,
                &quot;sed&quot;,
                &quot;vitae&quot;,
                &quot;labore&quot;
            ],
            &quot;user_id&quot;: 3,
            &quot;article_id&quot;: 3,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;body&quot;: [
                &quot;voluptate&quot;,
                &quot;est&quot;,
                &quot;consequuntur&quot;,
                &quot;ut&quot;,
                &quot;ipsa&quot;,
                &quot;qui&quot;,
                &quot;eos&quot;,
                &quot;qui&quot;,
                &quot;at&quot;,
                &quot;beatae&quot;
            ],
            &quot;user_id&quot;: 9,
            &quot;article_id&quot;: 1,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;body&quot;: &quot;pretty poor article&quot;,
            &quot;user_id&quot;: 3,
            &quot;article_id&quot;: 1,
            &quot;created_at&quot;: &quot;2023-04-22T09:27:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T09:29:55.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/v1/comments?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/v1/comments?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/comments?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/v1/comments&quot;,
        &quot;per_page&quot;: 20,
        &quot;to&quot;: 6,
        &quot;total&quot;: 6
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-comments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-comments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-comments" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-comments"></code></pre>
</span>
<form id="form-GETapi-v1-comments" data-method="GET"
      data-path="api/v1/comments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-comments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-comments"
                    onclick="tryItOut('GETapi-v1-comments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-comments"
                    onclick="cancelTryOut('GETapi-v1-comments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-comments" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/comments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-comments--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-comments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/comments/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/comments/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-comments--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;body&quot;: [
            &quot;voluptatibus&quot;,
            &quot;et&quot;,
            &quot;corrupti&quot;,
            &quot;nam&quot;,
            &quot;quos&quot;,
            &quot;et&quot;,
            &quot;adipisci&quot;,
            &quot;et&quot;,
            &quot;delectus&quot;,
            &quot;numquam&quot;
        ],
        &quot;user_id&quot;: 3,
        &quot;article_id&quot;: 2,
        &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-comments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-comments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-comments--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-comments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-comments--id-"></code></pre>
</span>
<form id="form-GETapi-v1-comments--id-" data-method="GET"
      data-path="api/v1/comments/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-comments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-comments--id-"
                    onclick="tryItOut('GETapi-v1-comments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-comments--id-"
                    onclick="cancelTryOut('GETapi-v1-comments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-comments--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/comments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-comments--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the comment. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-comments">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-comments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/comments" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"body\": \"in\",
    \"user_id\": 19,
    \"article_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/comments"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "body": "in",
    "user_id": 19,
    "article_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-comments">
</span>
<span id="execution-results-POSTapi-v1-comments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-comments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-comments" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-comments"></code></pre>
</span>
<form id="form-POSTapi-v1-comments" data-method="POST"
      data-path="api/v1/comments"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-comments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-comments"
                    onclick="tryItOut('POSTapi-v1-comments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-comments"
                    onclick="cancelTryOut('POSTapi-v1-comments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-comments" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/comments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="body"                data-endpoint="POSTapi-v1-comments"
               value="in"
               data-component="body">
    <br>
<p>Example: <code>in</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="user_id"                data-endpoint="POSTapi-v1-comments"
               value="19"
               data-component="body">
    <br>
<p>Example: <code>19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>article_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="article_id"                data-endpoint="POSTapi-v1-comments"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-comments--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-comments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/v1/comments/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"body\": \"voluptatem\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/comments/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "body": "voluptatem"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-comments--id-">
</span>
<span id="execution-results-PATCHapi-v1-comments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-comments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-comments--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-comments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-comments--id-"></code></pre>
</span>
<form id="form-PATCHapi-v1-comments--id-" data-method="PATCH"
      data-path="api/v1/comments/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-comments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-comments--id-"
                    onclick="tryItOut('PATCHapi-v1-comments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-comments--id-"
                    onclick="cancelTryOut('PATCHapi-v1-comments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-comments--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/comments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-v1-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-v1-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PATCHapi-v1-comments--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the comment. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="body"                data-endpoint="PATCHapi-v1-comments--id-"
               value="voluptatem"
               data-component="body">
    <br>
<p>Example: <code>voluptatem</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-v1-comments--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-comments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/comments/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/comments/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-comments--id-">
</span>
<span id="execution-results-DELETEapi-v1-comments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-comments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-comments--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-comments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-comments--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-comments--id-" data-method="DELETE"
      data-path="api/v1/comments/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-comments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-comments--id-"
                    onclick="tryItOut('DELETEapi-v1-comments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-comments--id-"
                    onclick="cancelTryOut('DELETEapi-v1-comments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-comments--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/comments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-comments--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the comment. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-prizes">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-prizes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/prizes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/prizes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-prizes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Prof.&quot;,
            &quot;description&quot;: [
                &quot;non&quot;,
                &quot;sunt&quot;,
                &quot;deserunt&quot;,
                &quot;et&quot;,
                &quot;expedita&quot;,
                &quot;expedita&quot;,
                &quot;incidunt&quot;,
                &quot;at&quot;,
                &quot;suscipit&quot;,
                &quot;a&quot;
            ],
            &quot;expiration_date&quot;: &quot;2023-04-20&quot;,
            &quot;user_id&quot;: 6,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Prof.&quot;,
            &quot;description&quot;: [
                &quot;voluptates&quot;,
                &quot;et&quot;,
                &quot;dolorem&quot;,
                &quot;hic&quot;,
                &quot;sunt&quot;,
                &quot;et&quot;,
                &quot;saepe&quot;,
                &quot;fugit&quot;,
                &quot;expedita&quot;,
                &quot;ipsum&quot;
            ],
            &quot;expiration_date&quot;: &quot;2023-04-09&quot;,
            &quot;user_id&quot;: 10,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Ms.&quot;,
            &quot;description&quot;: [
                &quot;omnis&quot;,
                &quot;velit&quot;,
                &quot;accusantium&quot;,
                &quot;praesentium&quot;,
                &quot;perferendis&quot;,
                &quot;velit&quot;,
                &quot;vitae&quot;,
                &quot;tempore&quot;,
                &quot;omnis&quot;,
                &quot;dolores&quot;
            ],
            &quot;expiration_date&quot;: &quot;2023-01-29&quot;,
            &quot;user_id&quot;: 10,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Prof.&quot;,
            &quot;description&quot;: [
                &quot;beatae&quot;,
                &quot;ipsum&quot;,
                &quot;laborum&quot;,
                &quot;eos&quot;,
                &quot;ut&quot;,
                &quot;nesciunt&quot;,
                &quot;aliquam&quot;,
                &quot;alias&quot;,
                &quot;ut&quot;,
                &quot;autem&quot;
            ],
            &quot;expiration_date&quot;: &quot;2023-01-30&quot;,
            &quot;user_id&quot;: 10,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Dr.&quot;,
            &quot;description&quot;: [
                &quot;dolore&quot;,
                &quot;nobis&quot;,
                &quot;temporibus&quot;,
                &quot;dolor&quot;,
                &quot;ipsa&quot;,
                &quot;consequatur&quot;,
                &quot;temporibus&quot;,
                &quot;excepturi&quot;,
                &quot;hic&quot;,
                &quot;voluptates&quot;
            ],
            &quot;expiration_date&quot;: &quot;2023-01-14&quot;,
            &quot;user_id&quot;: 3,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/v1/prizes?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/v1/prizes?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/prizes?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/v1/prizes&quot;,
        &quot;per_page&quot;: 20,
        &quot;to&quot;: 5,
        &quot;total&quot;: 5
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-prizes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-prizes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-prizes" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-prizes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-prizes"></code></pre>
</span>
<form id="form-GETapi-v1-prizes" data-method="GET"
      data-path="api/v1/prizes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-prizes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-prizes"
                    onclick="tryItOut('GETapi-v1-prizes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-prizes"
                    onclick="cancelTryOut('GETapi-v1-prizes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-prizes" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/prizes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-prizes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-prizes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-prizes--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-prizes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/prizes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/prizes/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-prizes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Prof.&quot;,
        &quot;description&quot;: [
            &quot;non&quot;,
            &quot;sunt&quot;,
            &quot;deserunt&quot;,
            &quot;et&quot;,
            &quot;expedita&quot;,
            &quot;expedita&quot;,
            &quot;incidunt&quot;,
            &quot;at&quot;,
            &quot;suscipit&quot;,
            &quot;a&quot;
        ],
        &quot;expiration_date&quot;: &quot;2023-04-20&quot;,
        &quot;user_id&quot;: 6,
        &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-prizes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-prizes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-prizes--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-prizes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-prizes--id-"></code></pre>
</span>
<form id="form-GETapi-v1-prizes--id-" data-method="GET"
      data-path="api/v1/prizes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-prizes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-prizes--id-"
                    onclick="tryItOut('GETapi-v1-prizes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-prizes--id-"
                    onclick="cancelTryOut('GETapi-v1-prizes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-prizes--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/prizes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-prizes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-prizes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-prizes--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the prize. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-prizes">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-prizes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/prizes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"optio\",
    \"description\": \"Adipisci corrupti fugit voluptate ea.\",
    \"expiration_date\": \"2077-05-31\",
    \"user_id\": 19
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/prizes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "optio",
    "description": "Adipisci corrupti fugit voluptate ea.",
    "expiration_date": "2077-05-31",
    "user_id": 19
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-prizes">
</span>
<span id="execution-results-POSTapi-v1-prizes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-prizes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-prizes" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-prizes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-prizes"></code></pre>
</span>
<form id="form-POSTapi-v1-prizes" data-method="POST"
      data-path="api/v1/prizes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-prizes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-prizes"
                    onclick="tryItOut('POSTapi-v1-prizes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-prizes"
                    onclick="cancelTryOut('POSTapi-v1-prizes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-prizes" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/prizes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-prizes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-prizes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-v1-prizes"
               value="optio"
               data-component="body">
    <br>
<p>Example: <code>optio</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="POSTapi-v1-prizes"
               value="Adipisci corrupti fugit voluptate ea."
               data-component="body">
    <br>
<p>Example: <code>Adipisci corrupti fugit voluptate ea.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expiration_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="expiration_date"                data-endpoint="POSTapi-v1-prizes"
               value="2077-05-31"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>tomorrow</code>. Example: <code>2077-05-31</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="user_id"                data-endpoint="POSTapi-v1-prizes"
               value="19"
               data-component="body">
    <br>
<p>Example: <code>19</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-prizes--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-prizes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/v1/prizes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"ducimus\",
    \"body\": \"repellat\",
    \"expiration_date\": \"2023-04-22T15:59:15\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/prizes/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ducimus",
    "body": "repellat",
    "expiration_date": "2023-04-22T15:59:15"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-prizes--id-">
</span>
<span id="execution-results-PATCHapi-v1-prizes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-prizes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-prizes--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-prizes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-prizes--id-"></code></pre>
</span>
<form id="form-PATCHapi-v1-prizes--id-" data-method="PATCH"
      data-path="api/v1/prizes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-prizes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-prizes--id-"
                    onclick="tryItOut('PATCHapi-v1-prizes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-prizes--id-"
                    onclick="cancelTryOut('PATCHapi-v1-prizes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-prizes--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/prizes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-v1-prizes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-v1-prizes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PATCHapi-v1-prizes--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the prize. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="PATCHapi-v1-prizes--id-"
               value="ducimus"
               data-component="body">
    <br>
<p>Example: <code>ducimus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="body"                data-endpoint="PATCHapi-v1-prizes--id-"
               value="repellat"
               data-component="body">
    <br>
<p>Example: <code>repellat</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expiration_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="expiration_date"                data-endpoint="PATCHapi-v1-prizes--id-"
               value="2023-04-22T15:59:15"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-04-22T15:59:15</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-v1-prizes--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-prizes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/prizes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/prizes/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-prizes--id-">
</span>
<span id="execution-results-DELETEapi-v1-prizes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-prizes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-prizes--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-prizes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-prizes--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-prizes--id-" data-method="DELETE"
      data-path="api/v1/prizes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-prizes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-prizes--id-"
                    onclick="tryItOut('DELETEapi-v1-prizes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-prizes--id-"
                    onclick="cancelTryOut('DELETEapi-v1-prizes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-prizes--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/prizes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-prizes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-prizes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-prizes--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the prize. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-subscribers">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-subscribers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/subscribers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/subscribers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-subscribers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;user_id&quot;: 7,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;user_id&quot;: 8,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;user_id&quot;: 10,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;user_id&quot;: 6,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;user_id&quot;: 8,
            &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/v1/subscribers?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/v1/subscribers?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/subscribers?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/v1/subscribers&quot;,
        &quot;per_page&quot;: 20,
        &quot;to&quot;: 5,
        &quot;total&quot;: 5
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-subscribers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-subscribers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-subscribers" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-subscribers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-subscribers"></code></pre>
</span>
<form id="form-GETapi-v1-subscribers" data-method="GET"
      data-path="api/v1/subscribers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-subscribers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-subscribers"
                    onclick="tryItOut('GETapi-v1-subscribers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-subscribers"
                    onclick="cancelTryOut('GETapi-v1-subscribers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-subscribers" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/subscribers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-subscribers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-subscribers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-subscribers--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-subscribers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/subscribers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/subscribers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-subscribers--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;user_id&quot;: 7,
        &quot;created_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-04-20T16:48:29.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-subscribers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-subscribers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-subscribers--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-subscribers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-subscribers--id-"></code></pre>
</span>
<form id="form-GETapi-v1-subscribers--id-" data-method="GET"
      data-path="api/v1/subscribers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-subscribers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-subscribers--id-"
                    onclick="tryItOut('GETapi-v1-subscribers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-subscribers--id-"
                    onclick="cancelTryOut('GETapi-v1-subscribers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-subscribers--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/subscribers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-subscribers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-subscribers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-subscribers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the subscriber. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-subscribers">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-subscribers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/subscribers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 5
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/subscribers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 5
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-subscribers">
</span>
<span id="execution-results-POSTapi-v1-subscribers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-subscribers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-subscribers" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-subscribers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-subscribers"></code></pre>
</span>
<form id="form-POSTapi-v1-subscribers" data-method="POST"
      data-path="api/v1/subscribers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-subscribers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-subscribers"
                    onclick="tryItOut('POSTapi-v1-subscribers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-subscribers"
                    onclick="cancelTryOut('POSTapi-v1-subscribers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-subscribers" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/subscribers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-subscribers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-subscribers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="user_id"                data-endpoint="POSTapi-v1-subscribers"
               value="5"
               data-component="body">
    <br>
<p>Example: <code>5</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-subscribers--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-subscribers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/v1/subscribers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/subscribers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-subscribers--id-">
</span>
<span id="execution-results-PATCHapi-v1-subscribers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-subscribers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-subscribers--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-subscribers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-subscribers--id-"></code></pre>
</span>
<form id="form-PATCHapi-v1-subscribers--id-" data-method="PATCH"
      data-path="api/v1/subscribers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-subscribers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-subscribers--id-"
                    onclick="tryItOut('PATCHapi-v1-subscribers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-subscribers--id-"
                    onclick="cancelTryOut('PATCHapi-v1-subscribers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-subscribers--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/subscribers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-v1-subscribers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-v1-subscribers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PATCHapi-v1-subscribers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the subscriber. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-subscribers--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-subscribers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/subscribers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/subscribers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-subscribers--id-">
</span>
<span id="execution-results-DELETEapi-v1-subscribers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-subscribers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-subscribers--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-subscribers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-subscribers--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-subscribers--id-" data-method="DELETE"
      data-path="api/v1/subscribers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-subscribers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-subscribers--id-"
                    onclick="tryItOut('DELETEapi-v1-subscribers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-subscribers--id-"
                    onclick="cancelTryOut('DELETEapi-v1-subscribers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-subscribers--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/subscribers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-subscribers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-subscribers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-subscribers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the subscriber. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="user-management">User Management</h1>

    <p>APIs to manage the user resource</p>

                                <h2 id="user-management-GETapi-v1-users">Display a list of users</h2>

<p>
</p>

<p>Gets a list of users</p>

<span id="example-requests-GETapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/users?page_size=15&amp;page=8" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users"
);

const params = {
    "page_size": "15",
    "page": "8",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;Nash Dietrich V&quot;,
            &quot;email&quot;: &quot;hadley32@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.729274Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        },
        {
            &quot;id&quot;: 23,
            &quot;name&quot;: &quot;Ross Kirlin&quot;,
            &quot;email&quot;: &quot;jmills@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.731210Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users"></code></pre>
</span>
<form id="form-GETapi-v1-users" data-method="GET"
      data-path="api/v1/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users"
                    onclick="tryItOut('GETapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users"
                    onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page_size</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="page_size"                data-endpoint="GETapi-v1-users"
               value="15"
               data-component="query">
    <br>
<p>Size per page. Defaults to 20. Example 20 Example: <code>15</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="page"                data-endpoint="GETapi-v1-users"
               value="8"
               data-component="query">
    <br>
<p>Page to view. Example: <code>8</code></p>
            </div>
                </form>

                    <h2 id="user-management-GETapi-v1-users--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/users/12" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users/12"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 24,
            &quot;name&quot;: &quot;Prof. Katrine Simonis&quot;,
            &quot;email&quot;: &quot;walton22@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.746539Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        },
        {
            &quot;id&quot;: 25,
            &quot;name&quot;: &quot;Kirk Ledner&quot;,
            &quot;email&quot;: &quot;uhammes@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.747131Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users--id-"></code></pre>
</span>
<form id="form-GETapi-v1-users--id-" data-method="GET"
      data-path="api/v1/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users--id-"
                    onclick="tryItOut('GETapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users--id-"
                    onclick="cancelTryOut('GETapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-users--id-"
               value="12"
               data-component="url">
    <br>
<p>User ID Example: <code>12</code></p>
            </div>
                    </form>

                    <h2 id="user-management-POSTapi-v1-users">Store a newly created resource in storage</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"John Doe\",
    \"email\": \"john@doe.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "John Doe",
    "email": "john@doe.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 26,
            &quot;name&quot;: &quot;Mr. Juwan Huel IV&quot;,
            &quot;email&quot;: &quot;wisoky.aimee@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.755229Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        },
        {
            &quot;id&quot;: 27,
            &quot;name&quot;: &quot;Nathen Carroll IV&quot;,
            &quot;email&quot;: &quot;maryjane.powlowski@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.755777Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users"></code></pre>
</span>
<form id="form-POSTapi-v1-users" data-method="POST"
      data-path="api/v1/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users"
                    onclick="tryItOut('POSTapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users"
                    onclick="cancelTryOut('POSTapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-v1-users"
               value="John Doe"
               data-component="body">
    <br>
<p>Name of the user. Example: <code>John Doe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-v1-users"
               value="john@doe.com"
               data-component="body">
    <br>
<p>Email of the user. Example: <code>john@doe.com</code></p>
        </div>
        </form>

                    <h2 id="user-management-PATCHapi-v1-users--id-">Update the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/v1/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"John Doe\",
    \"email\": \"john@doe.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "John Doe",
    "email": "john@doe.com"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 28,
            &quot;name&quot;: &quot;Gerda Wyman&quot;,
            &quot;email&quot;: &quot;marquardt.jordon@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.763743Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        },
        {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;Ms. Janiya Streich I&quot;,
            &quot;email&quot;: &quot;pasquale.conn@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.764587Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-users--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-users--id-"></code></pre>
</span>
<form id="form-PATCHapi-v1-users--id-" data-method="PATCH"
      data-path="api/v1/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-users--id-"
                    onclick="tryItOut('PATCHapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-users--id-"
                    onclick="cancelTryOut('PATCHapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PATCHapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="PATCHapi-v1-users--id-"
               value="John Doe"
               data-component="body">
    <br>
<p>Name of the user. Example: <code>John Doe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="PATCHapi-v1-users--id-"
               value="john@doe.com"
               data-component="body">
    <br>
<p>Email of the user. Example: <code>john@doe.com</code></p>
        </div>
        </form>

                    <h2 id="user-management-DELETEapi-v1-users--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 30,
            &quot;name&quot;: &quot;Prof. Carey Turcotte III&quot;,
            &quot;email&quot;: &quot;mae.bradtke@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.769835Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        },
        {
            &quot;id&quot;: 31,
            &quot;name&quot;: &quot;Cathy Hilpert&quot;,
            &quot;email&quot;: &quot;idella46@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-22T15:59:15.770751Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-22T15:59:15.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-users--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-users--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-users--id-" data-method="DELETE"
      data-path="api/v1/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-users--id-"
                    onclick="tryItOut('DELETEapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-users--id-"
                    onclick="cancelTryOut('DELETEapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
