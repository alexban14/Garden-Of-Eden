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
                    <ul id="tocify-header-article-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="article-management">
                    <a href="#article-management">Article Management</a>
                </li>
                                    <ul id="tocify-subheader-article-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="article-management-GETapi-v1-articles">
                                <a href="#article-management-GETapi-v1-articles">Display a listing of articles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="article-management-GETapi-v1-articles--id-">
                                <a href="#article-management-GETapi-v1-articles--id-">Display the specified article.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="article-management-POSTapi-v1-articles">
                                <a href="#article-management-POSTapi-v1-articles">Store a newly created article in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="article-management-PATCHapi-v1-articles--id-">
                                <a href="#article-management-PATCHapi-v1-articles--id-">Update the specified article in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="article-management-DELETEapi-v1-articles--id-">
                                <a href="#article-management-DELETEapi-v1-articles--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
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
                                <a href="#user-management-GETapi-v1-users--id-">Display the specified user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTapi-v1-users">
                                <a href="#user-management-POSTapi-v1-users">Store a newly created user in storage</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-PATCHapi-v1-users--id-">
                                <a href="#user-management-PATCHapi-v1-users--id-">Update the specified user from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-DELETEapi-v1-users--id-">
                                <a href="#user-management-DELETEapi-v1-users--id-">Remove the user resource from storage.</a>
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
        <li>Last updated: April 23, 2023</li>
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

        <h1 id="article-management">Article Management</h1>

    <p>APIs to manage the article resource</p>

                                <h2 id="article-management-GETapi-v1-articles">Display a listing of articles</h2>

<p>
</p>

<p>Gets a list of Articles.</p>

<span id="example-requests-GETapi-v1-articles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/articles?page_size=1&amp;page=12" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/articles"
);

const params = {
    "page_size": "1",
    "page": "12",
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
    &quot;data&quot;: [],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/v1/articles?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/v1/articles?page=6&quot;,
        &quot;prev&quot;: &quot;http://localhost/api/v1/articles?page=11&quot;,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 12,
        &quot;from&quot;: null,
        &quot;last_page&quot;: 6,
        &quot;links&quot;: [
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/articles?page=11&quot;,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/articles?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/articles?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/articles?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/articles?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/articles?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/articles?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/v1/articles&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: null,
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
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page_size</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="page_size"                data-endpoint="GETapi-v1-articles"
               value="1"
               data-component="query">
    <br>
<p>Size per page. Defaults to 20. Example 20 Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="page"                data-endpoint="GETapi-v1-articles"
               value="12"
               data-component="query">
    <br>
<p>Page to view. Example: <code>12</code></p>
            </div>
                </form>

                    <h2 id="article-management-GETapi-v1-articles--id-">Display the specified article.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-articles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/articles/20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/articles/20"
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
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;Prof.&quot;,
            &quot;body&quot;: [
                &quot;voluptatem&quot;,
                &quot;sit&quot;,
                &quot;sit&quot;,
                &quot;sit&quot;,
                &quot;et&quot;,
                &quot;totam&quot;,
                &quot;neque&quot;,
                &quot;a&quot;,
                &quot;sunt&quot;,
                &quot;sunt&quot;,
                &quot;ea&quot;,
                &quot;maxime&quot;,
                &quot;esse&quot;,
                &quot;perferendis&quot;,
                &quot;culpa&quot;,
                &quot;vitae&quot;,
                &quot;quia&quot;,
                &quot;harum&quot;,
                &quot;sit&quot;,
                &quot;commodi&quot;,
                &quot;distinctio&quot;,
                &quot;eum&quot;,
                &quot;sint&quot;,
                &quot;consequuntur&quot;,
                &quot;sint&quot;,
                &quot;itaque&quot;,
                &quot;aut&quot;,
                &quot;eos&quot;,
                &quot;fugit&quot;,
                &quot;ex&quot;,
                &quot;molestiae&quot;,
                &quot;soluta&quot;,
                &quot;modi&quot;,
                &quot;eum&quot;,
                &quot;sapiente&quot;,
                &quot;exercitationem&quot;,
                &quot;dolores&quot;,
                &quot;natus&quot;,
                &quot;a&quot;,
                &quot;consequatur&quot;,
                &quot;sunt&quot;,
                &quot;consequuntur&quot;,
                &quot;nisi&quot;,
                &quot;inventore&quot;,
                &quot;totam&quot;,
                &quot;consequatur&quot;,
                &quot;sed&quot;,
                &quot;architecto&quot;,
                &quot;sunt&quot;,
                &quot;ratione&quot;,
                &quot;tenetur&quot;,
                &quot;corporis&quot;,
                &quot;neque&quot;,
                &quot;commodi&quot;,
                &quot;perferendis&quot;,
                &quot;sint&quot;,
                &quot;voluptatem&quot;,
                &quot;alias&quot;,
                &quot;et&quot;,
                &quot;neque&quot;,
                &quot;reprehenderit&quot;,
                &quot;dolore&quot;,
                &quot;et&quot;,
                &quot;qui&quot;,
                &quot;inventore&quot;,
                &quot;ex&quot;,
                &quot;id&quot;,
                &quot;est&quot;,
                &quot;odit&quot;,
                &quot;veniam&quot;,
                &quot;veritatis&quot;,
                &quot;necessitatibus&quot;,
                &quot;quidem&quot;,
                &quot;sunt&quot;,
                &quot;porro&quot;,
                &quot;voluptates&quot;,
                &quot;optio&quot;,
                &quot;et&quot;,
                &quot;repellendus&quot;,
                &quot;sapiente&quot;,
                &quot;porro&quot;,
                &quot;odit&quot;,
                &quot;aspernatur&quot;,
                &quot;ut&quot;,
                &quot;impedit&quot;,
                &quot;et&quot;,
                &quot;rerum&quot;,
                &quot;placeat&quot;,
                &quot;nostrum&quot;,
                &quot;cum&quot;,
                &quot;ea&quot;,
                &quot;necessitatibus&quot;,
                &quot;aspernatur&quot;,
                &quot;aut&quot;,
                &quot;eveniet&quot;,
                &quot;voluptas&quot;,
                &quot;voluptatibus&quot;,
                &quot;consectetur&quot;,
                &quot;deleniti&quot;,
                &quot;distinctio&quot;
            ],
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ccee?text=nulla&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:03.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;title&quot;: &quot;Dr.&quot;,
            &quot;body&quot;: [
                &quot;at&quot;,
                &quot;sit&quot;,
                &quot;assumenda&quot;,
                &quot;magnam&quot;,
                &quot;commodi&quot;,
                &quot;consequatur&quot;,
                &quot;rem&quot;,
                &quot;ea&quot;,
                &quot;deserunt&quot;,
                &quot;optio&quot;,
                &quot;ex&quot;,
                &quot;est&quot;,
                &quot;ut&quot;,
                &quot;facere&quot;,
                &quot;et&quot;,
                &quot;ut&quot;,
                &quot;id&quot;,
                &quot;perspiciatis&quot;,
                &quot;voluptatibus&quot;,
                &quot;ab&quot;,
                &quot;ea&quot;,
                &quot;ut&quot;,
                &quot;in&quot;,
                &quot;et&quot;,
                &quot;consequatur&quot;,
                &quot;necessitatibus&quot;,
                &quot;dolores&quot;,
                &quot;magni&quot;,
                &quot;et&quot;,
                &quot;reprehenderit&quot;,
                &quot;maiores&quot;,
                &quot;et&quot;,
                &quot;accusamus&quot;,
                &quot;repellat&quot;,
                &quot;nobis&quot;,
                &quot;quia&quot;,
                &quot;deserunt&quot;,
                &quot;tempore&quot;,
                &quot;dolor&quot;,
                &quot;explicabo&quot;,
                &quot;rem&quot;,
                &quot;veniam&quot;,
                &quot;itaque&quot;,
                &quot;neque&quot;,
                &quot;sit&quot;,
                &quot;ullam&quot;,
                &quot;repudiandae&quot;,
                &quot;soluta&quot;,
                &quot;voluptate&quot;,
                &quot;id&quot;,
                &quot;earum&quot;,
                &quot;maiores&quot;,
                &quot;sunt&quot;,
                &quot;nisi&quot;,
                &quot;non&quot;,
                &quot;sint&quot;,
                &quot;quibusdam&quot;,
                &quot;maxime&quot;,
                &quot;laboriosam&quot;,
                &quot;qui&quot;,
                &quot;sed&quot;,
                &quot;nulla&quot;,
                &quot;voluptatem&quot;,
                &quot;illum&quot;,
                &quot;nihil&quot;,
                &quot;qui&quot;,
                &quot;atque&quot;,
                &quot;alias&quot;,
                &quot;et&quot;,
                &quot;deleniti&quot;,
                &quot;quae&quot;,
                &quot;amet&quot;,
                &quot;saepe&quot;,
                &quot;modi&quot;,
                &quot;illum&quot;,
                &quot;voluptatem&quot;,
                &quot;omnis&quot;,
                &quot;et&quot;,
                &quot;fugit&quot;,
                &quot;dolores&quot;,
                &quot;qui&quot;,
                &quot;doloremque&quot;,
                &quot;reprehenderit&quot;,
                &quot;deserunt&quot;,
                &quot;odio&quot;,
                &quot;non&quot;,
                &quot;minus&quot;,
                &quot;voluptatibus&quot;,
                &quot;quis&quot;,
                &quot;quibusdam&quot;,
                &quot;doloribus&quot;,
                &quot;voluptates&quot;,
                &quot;ut&quot;,
                &quot;eum&quot;,
                &quot;error&quot;,
                &quot;rerum&quot;,
                &quot;dicta&quot;,
                &quot;at&quot;,
                &quot;itaque&quot;,
                &quot;ducimus&quot;
            ],
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0000ee?text=iusto&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:03.000000Z&quot;
        }
    ]
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
               value="20"
               data-component="url">
    <br>
<p>Article ID Example: <code>20</code></p>
            </div>
                    </form>

                    <h2 id="article-management-POSTapi-v1-articles">Store a newly created article in storage.</h2>

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
    \"title\": \"Improve Happiness\",
    \"body\": \"This is an article about improving life happiness\",
    \"image\": \"http:\\/\\/image.com\",
    \"user_id\": 9
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
    "title": "Improve Happiness",
    "body": "This is an article about improving life happiness",
    "image": "http:\/\/image.com",
    "user_id": 9
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
               value="Improve Happiness"
               data-component="body">
    <br>
<p>Title of the article. Example: <code>Improve Happiness</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="body"                data-endpoint="POSTapi-v1-articles"
               value="This is an article about improving life happiness"
               data-component="body">
    <br>
<p>Body of the article. Example: <code>This is an article about improving life happiness</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>url</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="image"                data-endpoint="POSTapi-v1-articles"
               value="http://image.com"
               data-component="body">
    <br>
<p>optional Image for the article. Example: <code>http://image.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="user_id"                data-endpoint="POSTapi-v1-articles"
               value="9"
               data-component="body">
    <br>
<p>Example: <code>9</code></p>
        </div>
        </form>

                    <h2 id="article-management-PATCHapi-v1-articles--id-">Update the specified article in storage.</h2>

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
    \"title\": \"Improve Happiness\",
    \"body\": \"This is an article about improving life happiness\",
    \"image\": \"http:\\/\\/image.com\",
    \"user_id\": 15
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
    "title": "Improve Happiness",
    "body": "This is an article about improving life happiness",
    "image": "http:\/\/image.com",
    "user_id": 15
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
               value="Improve Happiness"
               data-component="body">
    <br>
<p>Title of the article. Example: <code>Improve Happiness</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="body"                data-endpoint="PATCHapi-v1-articles--id-"
               value="This is an article about improving life happiness"
               data-component="body">
    <br>
<p>Body of the article. Example: <code>This is an article about improving life happiness</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>url</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="image"                data-endpoint="PATCHapi-v1-articles--id-"
               value="http://image.com"
               data-component="body">
    <br>
<p>Image for the article. Example: <code>http://image.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="user_id"                data-endpoint="PATCHapi-v1-articles--id-"
               value="15"
               data-component="body">
    <br>
<p>Example: <code>15</code></p>
        </div>
        </form>

                    <h2 id="article-management-DELETEapi-v1-articles--id-">Remove the specified resource from storage.</h2>

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
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;Mrs.&quot;,
            &quot;body&quot;: [
                &quot;magnam&quot;,
                &quot;veniam&quot;,
                &quot;eos&quot;,
                &quot;debitis&quot;,
                &quot;doloribus&quot;,
                &quot;ut&quot;,
                &quot;voluptatem&quot;,
                &quot;repellendus&quot;,
                &quot;enim&quot;,
                &quot;quia&quot;,
                &quot;provident&quot;,
                &quot;corrupti&quot;,
                &quot;molestiae&quot;,
                &quot;ut&quot;,
                &quot;maiores&quot;,
                &quot;voluptates&quot;,
                &quot;voluptatem&quot;,
                &quot;vel&quot;,
                &quot;est&quot;,
                &quot;ea&quot;,
                &quot;qui&quot;,
                &quot;autem&quot;,
                &quot;odio&quot;,
                &quot;illo&quot;,
                &quot;quisquam&quot;,
                &quot;laborum&quot;,
                &quot;culpa&quot;,
                &quot;dignissimos&quot;,
                &quot;cumque&quot;,
                &quot;et&quot;,
                &quot;autem&quot;,
                &quot;rerum&quot;,
                &quot;qui&quot;,
                &quot;dolorem&quot;,
                &quot;sunt&quot;,
                &quot;aut&quot;,
                &quot;ut&quot;,
                &quot;voluptatibus&quot;,
                &quot;velit&quot;,
                &quot;quis&quot;,
                &quot;optio&quot;,
                &quot;facere&quot;,
                &quot;quibusdam&quot;,
                &quot;consequatur&quot;,
                &quot;sint&quot;,
                &quot;rem&quot;,
                &quot;qui&quot;,
                &quot;voluptate&quot;,
                &quot;rem&quot;,
                &quot;non&quot;,
                &quot;dolore&quot;,
                &quot;ipsum&quot;,
                &quot;voluptatem&quot;,
                &quot;quod&quot;,
                &quot;explicabo&quot;,
                &quot;voluptatum&quot;,
                &quot;blanditiis&quot;,
                &quot;labore&quot;,
                &quot;dolorem&quot;,
                &quot;sunt&quot;,
                &quot;maiores&quot;,
                &quot;ex&quot;,
                &quot;fuga&quot;,
                &quot;fugiat&quot;,
                &quot;porro&quot;,
                &quot;ex&quot;,
                &quot;qui&quot;,
                &quot;mollitia&quot;,
                &quot;aut&quot;,
                &quot;sit&quot;,
                &quot;libero&quot;,
                &quot;minus&quot;,
                &quot;et&quot;,
                &quot;qui&quot;,
                &quot;consequatur&quot;,
                &quot;aut&quot;,
                &quot;officiis&quot;,
                &quot;cupiditate&quot;,
                &quot;iusto&quot;,
                &quot;non&quot;,
                &quot;qui&quot;,
                &quot;distinctio&quot;,
                &quot;harum&quot;,
                &quot;officiis&quot;,
                &quot;dignissimos&quot;,
                &quot;nihil&quot;,
                &quot;dolorem&quot;,
                &quot;vitae&quot;,
                &quot;maiores&quot;,
                &quot;excepturi&quot;,
                &quot;quisquam&quot;,
                &quot;quia&quot;,
                &quot;repudiandae&quot;,
                &quot;rerum&quot;,
                &quot;et&quot;,
                &quot;dolores&quot;,
                &quot;quis&quot;,
                &quot;itaque&quot;,
                &quot;aspernatur&quot;,
                &quot;quo&quot;
            ],
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0055ee?text=hic&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:03.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;title&quot;: &quot;Dr.&quot;,
            &quot;body&quot;: [
                &quot;quisquam&quot;,
                &quot;ut&quot;,
                &quot;quod&quot;,
                &quot;et&quot;,
                &quot;maxime&quot;,
                &quot;provident&quot;,
                &quot;consequuntur&quot;,
                &quot;provident&quot;,
                &quot;dolor&quot;,
                &quot;doloremque&quot;,
                &quot;nisi&quot;,
                &quot;ab&quot;,
                &quot;ut&quot;,
                &quot;ut&quot;,
                &quot;quia&quot;,
                &quot;ipsam&quot;,
                &quot;ipsa&quot;,
                &quot;ut&quot;,
                &quot;amet&quot;,
                &quot;quidem&quot;,
                &quot;nihil&quot;,
                &quot;modi&quot;,
                &quot;eos&quot;,
                &quot;deleniti&quot;,
                &quot;perspiciatis&quot;,
                &quot;ut&quot;,
                &quot;sunt&quot;,
                &quot;mollitia&quot;,
                &quot;vero&quot;,
                &quot;eos&quot;,
                &quot;odio&quot;,
                &quot;in&quot;,
                &quot;et&quot;,
                &quot;nostrum&quot;,
                &quot;soluta&quot;,
                &quot;id&quot;,
                &quot;ipsa&quot;,
                &quot;consequatur&quot;,
                &quot;est&quot;,
                &quot;minus&quot;,
                &quot;placeat&quot;,
                &quot;animi&quot;,
                &quot;qui&quot;,
                &quot;ut&quot;,
                &quot;eveniet&quot;,
                &quot;ut&quot;,
                &quot;similique&quot;,
                &quot;facilis&quot;,
                &quot;labore&quot;,
                &quot;quia&quot;,
                &quot;ipsam&quot;,
                &quot;sed&quot;,
                &quot;sunt&quot;,
                &quot;non&quot;,
                &quot;est&quot;,
                &quot;nihil&quot;,
                &quot;minus&quot;,
                &quot;quos&quot;,
                &quot;doloremque&quot;,
                &quot;quia&quot;,
                &quot;hic&quot;,
                &quot;maiores&quot;,
                &quot;ab&quot;,
                &quot;rem&quot;,
                &quot;dolorum&quot;,
                &quot;iste&quot;,
                &quot;eos&quot;,
                &quot;est&quot;,
                &quot;hic&quot;,
                &quot;quidem&quot;,
                &quot;asperiores&quot;,
                &quot;ut&quot;,
                &quot;nostrum&quot;,
                &quot;provident&quot;,
                &quot;nihil&quot;,
                &quot;facilis&quot;,
                &quot;sit&quot;,
                &quot;quod&quot;,
                &quot;aliquid&quot;,
                &quot;alias&quot;,
                &quot;beatae&quot;,
                &quot;alias&quot;,
                &quot;voluptas&quot;,
                &quot;non&quot;,
                &quot;occaecati&quot;,
                &quot;quis&quot;,
                &quot;rerum&quot;,
                &quot;commodi&quot;,
                &quot;harum&quot;,
                &quot;minima&quot;,
                &quot;aliquam&quot;,
                &quot;quia&quot;,
                &quot;hic&quot;,
                &quot;quam&quot;,
                &quot;praesentium&quot;,
                &quot;voluptatem&quot;,
                &quot;eos&quot;,
                &quot;culpa&quot;,
                &quot;illo&quot;,
                &quot;tempora&quot;
            ],
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00dd88?text=et&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:03.000000Z&quot;
        }
    ]
}</code>
 </pre>
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
x-ratelimit-remaining: 58
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
x-ratelimit-remaining: 57
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
    \"body\": \"molestias\",
    \"user_id\": 19,
    \"article_id\": 1
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
    "body": "molestias",
    "user_id": 19,
    "article_id": 1
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
               value="1"
               data-component="body">
    <br>
<p>Example: <code>1</code></p>
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
    \"body\": \"nesciunt\"
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
    "body": "nesciunt"
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
               value="nesciunt"
               data-component="body">
    <br>
<p>Example: <code>nesciunt</code></p>
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
x-ratelimit-remaining: 56
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
x-ratelimit-remaining: 55
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
    \"name\": \"delectus\",
    \"description\": \"Voluptatem deserunt odit minus voluptas nostrum qui.\",
    \"expiration_date\": \"2060-11-29\",
    \"user_id\": 3
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
    "name": "delectus",
    "description": "Voluptatem deserunt odit minus voluptas nostrum qui.",
    "expiration_date": "2060-11-29",
    "user_id": 3
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
               value="delectus"
               data-component="body">
    <br>
<p>Example: <code>delectus</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="POSTapi-v1-prizes"
               value="Voluptatem deserunt odit minus voluptas nostrum qui."
               data-component="body">
    <br>
<p>Example: <code>Voluptatem deserunt odit minus voluptas nostrum qui.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expiration_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="expiration_date"                data-endpoint="POSTapi-v1-prizes"
               value="2060-11-29"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>tomorrow</code>. Example: <code>2060-11-29</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="user_id"                data-endpoint="POSTapi-v1-prizes"
               value="3"
               data-component="body">
    <br>
<p>Example: <code>3</code></p>
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
    \"name\": \"et\",
    \"body\": \"consequuntur\",
    \"expiration_date\": \"2023-04-23T06:08:03\"
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
    "name": "et",
    "body": "consequuntur",
    "expiration_date": "2023-04-23T06:08:03"
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
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="body"                data-endpoint="PATCHapi-v1-prizes--id-"
               value="consequuntur"
               data-component="body">
    <br>
<p>Example: <code>consequuntur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expiration_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="expiration_date"                data-endpoint="PATCHapi-v1-prizes--id-"
               value="2023-04-23T06:08:03"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-04-23T06:08:03</code></p>
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
x-ratelimit-remaining: 54
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
x-ratelimit-remaining: 53
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
    \"user_id\": 15
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
    "user_id": 15
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
               value="15"
               data-component="body">
    <br>
<p>Example: <code>15</code></p>
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
    --get "http://localhost/api/v1/users?page_size=2&amp;page=10" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users"
);

const params = {
    "page_size": "2",
    "page": "10",
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
            &quot;id&quot;: 42,
            &quot;name&quot;: &quot;Dr. Katelin Stanton&quot;,
            &quot;email&quot;: &quot;oconnell.kamron@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.023193Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 43,
            &quot;name&quot;: &quot;Mr. Adriel Mann MD&quot;,
            &quot;email&quot;: &quot;cronin.ellen@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.024714Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
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
               value="2"
               data-component="query">
    <br>
<p>Size per page. Defaults to 20. Example 20 Example: <code>2</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="page"                data-endpoint="GETapi-v1-users"
               value="10"
               data-component="query">
    <br>
<p>Page to view. Example: <code>10</code></p>
            </div>
                </form>

                    <h2 id="user-management-GETapi-v1-users--id-">Display the specified user.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/users/11" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users/11"
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
            &quot;id&quot;: 44,
            &quot;name&quot;: &quot;Prof. Nolan Kirlin DVM&quot;,
            &quot;email&quot;: &quot;moises99@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.031881Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 45,
            &quot;name&quot;: &quot;Dr. Terrence Beatty DDS&quot;,
            &quot;email&quot;: &quot;makayla59@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.032947Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
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
               value="11"
               data-component="url">
    <br>
<p>User ID Example: <code>11</code></p>
            </div>
                    </form>

                    <h2 id="user-management-POSTapi-v1-users">Store a newly created user in storage</h2>

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
            &quot;id&quot;: 46,
            &quot;name&quot;: &quot;Yasmine Oberbrunner&quot;,
            &quot;email&quot;: &quot;klockman@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.039938Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 47,
            &quot;name&quot;: &quot;Mr. Emile Paucek&quot;,
            &quot;email&quot;: &quot;annalise04@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.040963Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
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

                    <h2 id="user-management-PATCHapi-v1-users--id-">Update the specified user from storage.</h2>

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
            &quot;id&quot;: 48,
            &quot;name&quot;: &quot;Ms. Bria Howe Sr.&quot;,
            &quot;email&quot;: &quot;vharris@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.047940Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 49,
            &quot;name&quot;: &quot;Easton Corwin&quot;,
            &quot;email&quot;: &quot;deven52@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.049066Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
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

                    <h2 id="user-management-DELETEapi-v1-users--id-">Remove the user resource from storage.</h2>

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
            &quot;id&quot;: 50,
            &quot;name&quot;: &quot;Rebeka Walter Jr.&quot;,
            &quot;email&quot;: &quot;stephany.block@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.057031Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
        },
        {
            &quot;id&quot;: 51,
            &quot;name&quot;: &quot;Cayla Koepp&quot;,
            &quot;email&quot;: &quot;saufderhar@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2023-04-23T06:08:04.057978Z&quot;,
            &quot;created_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-04-23T06:08:04.000000Z&quot;
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
