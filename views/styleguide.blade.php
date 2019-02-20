@extends('layouts.style')

@section('content')

<header class="bg-primary text-white py-5">
  <div class="container">
    <h1 class="mb-0">Style Guide</h1>
    <p class="lead mb-0 text-primary-lighter">This style guide was built with Bootstrap 4.3.1.</p>
  </div>
</header>

<div class="container mb-5">

  <div class="row pt-5">

    <aside class="col-md-3 col-lg-2">
      <ul class="nav flex-md-column sticky pb-4">

        <li class="nav-item"><a class="nav-link pl-0" href="#colors">Colors</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#typography">Typography</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#buttons">Buttons</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#accordions">Accordions</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#alerts">Alerts</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#page-6">Page 6</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#borders">Borders</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#cards">Cards</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#carousel">Carousel</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#dropdows">Dropdows</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#forms">Forms</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#modals">Modals</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#tables">Tables</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#tabs">Tabs</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#box">Box</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#messages">Messages</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#notifications">Notifications</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#tags">Tags</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#tiles">Tiles</a></li>
        <li class="nav-item"><a class="nav-link pl-0" href="#sections">Sections</a></li>

      </ul>
    </aside>

    <main class="col-md-9 col-lg-10">
      <section class="ss-section" id="colors">
        <h1>Colors</h1><p class="lead">Below you can find the different colors that you can you can override at any time in <code>/resources/sass/themes/your-theme.scss</code>.</p>
<p class="lead">Just make sure that you import your theme before importing Bootstrap.</p>

<hr>
<h2>Theme</h2><h3>primary</h3><div class="palette mt-3 mb-3">
    <div class="color-block shadow-sm">
        <span class="bg-primary-lightest"></span>
        -lightest
    </div>
    <div class="color-block shadow-sm">
        <span class="bg-primary-lighter"></span>
        -lighter
    </div>
    <div class="color-block shadow-sm">
        <span class="bg-primary-light"></span>
        -light
    </div>
    <div class="color-block shadow-sm">
        <span class="bg-primary"></span>
    </div>
    <div class="color-block shadow-sm">
        <span class="bg-primary-dark"></span>
        -dark
    </div>
    <div class="color-block shadow-sm">
        <span class="bg-primary-darker"></span>
        -darker
    </div>
    <div class="color-block shadow-sm">
        <span class="bg-primary-darkest"></span>
        -darkest
    </div>
</div>

<hr>
<h3>secondary</h3><div class="palette mb-3">
  <div class="color-block shadow-sm">
    <span class="bg-secondary-lightest"></span>
    -lightest
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-secondary-lighter"></span>
    -lighter
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-secondary-light"></span>
    -light
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-secondary"></span>
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-secondary-dark"></span>
    -dark
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-secondary-darker"></span>
    -darker
  </div>
    <div class="color-block shadow-sm">
      <span class="bg-secondary-darker"></span>
      -darkest
    </div>
</div>

<hr>
<h3>info</h3><div class="palette mb-3">
 <div class="color-block shadow-sm">
    <span class="bg-info-lightest"></span>
    -lightest
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-info-lighter"></span>
    -lighter
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-info-light"></span>
    -light
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-info"></span>
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-info-dark"></span>
    -dark
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-info-darker"></span>
    -darker
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-info-darkest"></span>
    -darkest
  </div>
</div>

<hr>
<h3>success</h3><div class="palette mb-3">
 <div class="color-block shadow-sm">
    <span class="bg-success-lightest"></span>
    -lightest
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-success-lighter"></span>
    -lighter
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-success-light"></span>
    -light
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-success"></span>
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-success-dark"></span>
    -dark
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-success-darker"></span>
    -darker
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-success-darkest"></span>
    -darkest
  </div>
</div>

<hr>
<h3>warning</h3><div class="palette mb-3">
 <div class="color-block shadow-sm">
    <span class="bg-warning-lightest"></span>
    -lightest
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-warning-lighter"></span>
    -lighter
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-warning-light"></span>
    -light
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-warning"></span>
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-warning-dark"></span>
    -dark
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-warning-darker"></span>
    -darker
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-warning-darkest"></span>
    -darkest
  </div>
</div>


<hr>
<h3>danger</h3><div class="palette mb-3">
 <div class="color-block shadow-sm">
    <span class="bg-danger-lightest"></span>
    -lightest
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-danger-lighter"></span>
    -lighter
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-danger-light"></span>
    -light
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-danger"></span>
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-danger-dark"></span>
    -dark
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-danger-darker"></span>
    -darker
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-danger-darkest"></span>
    -darkest
  </div>
</div>


<hr>
<h2>Shades</h2><div class="d-flex flex-column">
  <div class="color-block shadow-sm">
    <span class="bg-gray-900"></span>
    bg-gray-900
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-gray-800"></span>
    bg-gray-800
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-gray-700"></span>
    bg-gray-700
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-gray-600"></span>
    bg-gray-600
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-gray-500"></span>
    bg-gray-500
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-gray-400"></span>
    bg-gray-400
  </div>
  <div class="color-block shadow-sm">
    <span class="bg-gray-300"></span>
    bg-gray-300
  </div>
    <div class="color-block shadow-sm">
    <span class="bg-gray-200"></span>
    bg-gray-200
  </div>
    <div class="color-block shadow-sm">
    <span class="bg-gray-100"></span>
    bg-gray-100
  </div>
</div>
      </section>
      <section class="ss-section" id="typography">
        <h1>Typography</h1><p class="lead">This design uses Helvetica for headings and paragraph text.</p>

<hr>
<h2>Headings</h2><p>Headings are used to denote different sections of content, usually consisting of related paragraphs and other HTML elements. They range from h1 to h6 and should be styled in a clear hierarchy (i.e., largest to smallest).</p>
<h1>h1. Bootstrap heading</h1>
<h2>h2. Bootstrap heading</h2>
<h3>h3. Bootstrap heading</h3>
<h4>h4. Bootstrap heading</h4>
<h5>h5. Bootstrap heading</h5>
<h6>h6. Bootstrap heading</h6>

<h1 class="display-1">Display 1</h1>
<h1 class="display-2">Display 2</h1>
<h1 class="display-3">Display 3</h1>
<h1 class="display-4">Display 4</h1>

<hr>
<h2>Paragraphs</h2><p>Paragraphs are groups of sentences, each with a lead (first sentence) and transition (last sentence). They are block level elements, meaning they stack vertically when repeated. Use them as such.</p>
<hr>
<h1>Heading Level 1</h1>

<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>

<h2>Heading Level 2</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<h3>Heading Level 3</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<h4>Heading Level 4</h4>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<h5>Heading Level 5</h5>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<h6>Heading Level 6</h6>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quibusdam ratione sunt dolorum, qui illo maxime doloremque accusantium cum libero eum, a optio odio placeat debitis ullam aut non distinctio.</p>
<hr>
<h2>Inline text elements</h2><p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>

<hr>
<h2>Blockquotes</h2><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">blockquote</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"blockquote"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">p</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"mb-0"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">footer</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"blockquote-footer"</span>&gt;</span>Someone famous in <span class="hljs-tag">&lt;<span class="hljs-title">cite</span> <span class="hljs-attribute">title</span>=<span class="hljs-value">"Source Title"</span>&gt;</span>Source Title<span class="hljs-tag">&lt;/<span class="hljs-title">cite</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">footer</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">blockquote</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote></div>
      </section>
      <section class="ss-section" id="buttons">
        <h1>Buttons</h1><p class="lead">Buttons are tied to an action of some kind, whether that button is on a cheese dispenser or launches the rocket that you&#39;re strapped to. On the web, we follow similar conventions.</p>

<hr>
<h2>Classic buttons</h2><p>Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary"</span>&gt;</span>Primary<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-secondary"</span>&gt;</span>Secondary<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-success"</span>&gt;</span>Success<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-danger"</span>&gt;</span>Danger<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-warning"</span>&gt;</span>Warning<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-info"</span>&gt;</span>Info<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-dark"</span>&gt;</span>Dark<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-link"</span>&gt;</span>Link<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button></div><div class="color-block bg-gray-700 my-3 pt-4 pb-3 pl-3">
  <button type="button" class="btn btn-light">Light</button>
</div>

<hr>
<h2>Outline buttons</h2><p>In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the .btn-outline-* ones to remove all background images and colors on any button.</p>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-primary"</span>&gt;</span>Primary<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-secondary"</span>&gt;</span>Secondary<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-success"</span>&gt;</span>Success<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-danger"</span>&gt;</span>Danger<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-warning"</span>&gt;</span>Warning<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-info"</span>&gt;</span>Info<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-dark"</span>&gt;</span>Dark<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-dark">Dark</button></div><div class="color-block bg-gray-700 my-3 pt-4 pb-3 pl-3">
  <button type="button" class="btn btn-outline-light">Light</button>
</div>

<hr>
<h2>Rounded Buttons</h2><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary btn-rounded"</span>&gt;</span>Primary<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-secondary btn-rounded"</span>&gt;</span>Secondary<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-success btn-rounded"</span>&gt;</span>Success<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-danger btn-rounded"</span>&gt;</span>Danger<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-warning btn-rounded"</span>&gt;</span>Warning<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-info btn-rounded"</span>&gt;</span>Info<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-dark btn-rounded"</span>&gt;</span>Dark<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><button type="button" class="btn btn-primary btn-rounded">Primary</button>
<button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
<button type="button" class="btn btn-success btn-rounded">Success</button>
<button type="button" class="btn btn-danger btn-rounded">Danger</button>
<button type="button" class="btn btn-warning btn-rounded">Warning</button>
<button type="button" class="btn btn-info btn-rounded">Info</button>
<button type="button" class="btn btn-dark btn-rounded">Dark</button></div><div class="color-block bg-gray-700 my-3 pt-4 pb-3 pl-3">
  <button type="button" class="btn btn-light btn-rounded">Light</button>
</div>

<hr>
<h2>Sizes</h2><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary btn-lg"</span>&gt;</span>Large button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-secondary btn-lg"</span>&gt;</span>Large button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-primary btn-lg"</span>&gt;</span>Large button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-secondary btn-lg"</span>&gt;</span>Large button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary btn-lg btn-rounded"</span>&gt;</span>Large button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-secondary btn-lg btn-rounded"</span>&gt;</span>Large button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><button type="button" class="btn btn-primary btn-lg">Large button</button>
<button type="button" class="btn btn-secondary btn-lg">Large button</button>
<button type="button" class="btn btn-outline-primary btn-lg">Large button</button>
<button type="button" class="btn btn-outline-secondary btn-lg">Large button</button>
<button type="button" class="btn btn-primary btn-lg btn-rounded">Large button</button>
<button type="button" class="btn btn-secondary btn-lg btn-rounded">Large button</button></div><hr>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary btn-sm"</span>&gt;</span>Small button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-secondary btn-sm"</span>&gt;</span>Small button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-primary btn-sm"</span>&gt;</span>Small outline<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-outline-secondary btn-sm"</span>&gt;</span>Small outline<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary btn-sm btn-rounded"</span>&gt;</span>Small rounded<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-secondary btn-sm btn-rounded"</span>&gt;</span>Small rounded<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-secondary btn-sm">Small button</button>
<button type="button" class="btn btn-outline-primary btn-sm">Small outline</button>
<button type="button" class="btn btn-outline-secondary btn-sm">Small outline</button>
<button type="button" class="btn btn-primary btn-sm btn-rounded">Small rounded</button>
<button type="button" class="btn btn-secondary btn-sm btn-rounded">Small rounded</button></div><hr>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary btn-lg btn-block"</span>&gt;</span>Block level button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-secondary btn-lg btn-block"</span>&gt;</span>Block level button<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button></div><hr>
<h2>Variations</h2><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary-lightest"</span>&gt;</span>Lightest<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary-lighter"</span>&gt;</span>Lighter<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary-light"</span>&gt;</span>Light<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary"</span>&gt;</span>Primary<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary-dark"</span>&gt;</span>Dark<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary-darker"</span>&gt;</span>Darker<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary-darkest"</span>&gt;</span>Darkest<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><button type="button" class="btn btn-primary-lightest">Lightest</button>
<button type="button" class="btn btn-primary-lighter">Lighter</button>
<button type="button" class="btn btn-primary-light">Light</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-primary-dark">Dark</button>
<button type="button" class="btn btn-primary-darker">Darker</button>
<button type="button" class="btn btn-primary-darkest">Darkest</button></div><button type="button" class="btn btn-secondary-lightest">Lightest</button>
<button type="button" class="btn btn-secondary-lighter">Lighter</button>
<button type="button" class="btn btn-secondary-light">Light</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-secondary-dark">Dark</button>
<button type="button" class="btn btn-secondary-darker">Darker</button>
<button type="button" class="btn btn-secondary-darkest">Darkest</button>
      </section>
      <section class="ss-section" id="accordions">
        <h1>Accordions</h1><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"accordion"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"accordionExample"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-header"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"headingOne"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">h2</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"mb-0"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-link"</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">data-toggle</span>=<span class="hljs-value">"collapse"</span> <span class="hljs-attribute">data-target</span>=<span class="hljs-value">"#collapseOne"</span> <span class="hljs-attribute">aria-expanded</span>=<span class="hljs-value">"true"</span> <span class="hljs-attribute">aria-controls</span>=<span class="hljs-value">"collapseOne"</span>&gt;</span>
          Collapsible Group Item #1
        <span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-title">h2</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>

    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"collapseOne"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"collapse show"</span> <span class="hljs-attribute">aria-labelledby</span>=<span class="hljs-value">"headingOne"</span> <span class="hljs-attribute">data-parent</span>=<span class="hljs-value">"#accordionExample"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-body"</span>&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-header"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"headingTwo"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">h2</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"mb-0"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-link collapsed"</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">data-toggle</span>=<span class="hljs-value">"collapse"</span> <span class="hljs-attribute">data-target</span>=<span class="hljs-value">"#collapseTwo"</span> <span class="hljs-attribute">aria-expanded</span>=<span class="hljs-value">"false"</span> <span class="hljs-attribute">aria-controls</span>=<span class="hljs-value">"collapseTwo"</span>&gt;</span>
          Collapsible Group Item #2
        <span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-title">h2</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"collapseTwo"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"collapse"</span> <span class="hljs-attribute">aria-labelledby</span>=<span class="hljs-value">"headingTwo"</span> <span class="hljs-attribute">data-parent</span>=<span class="hljs-value">"#accordionExample"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-body"</span>&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-header"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"headingThree"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">h2</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"mb-0"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-link collapsed"</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">data-toggle</span>=<span class="hljs-value">"collapse"</span> <span class="hljs-attribute">data-target</span>=<span class="hljs-value">"#collapseThree"</span> <span class="hljs-attribute">aria-expanded</span>=<span class="hljs-value">"false"</span> <span class="hljs-attribute">aria-controls</span>=<span class="hljs-value">"collapseThree"</span>&gt;</span>
          Collapsible Group Item #3
        <span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-title">h2</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"collapseThree"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"collapse"</span> <span class="hljs-attribute">aria-labelledby</span>=<span class="hljs-value">"headingThree"</span> <span class="hljs-attribute">data-parent</span>=<span class="hljs-value">"#accordionExample"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-body"</span>&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div></div>
      </section>
      <section class="ss-section" id="alerts">
        <h1>Alerts</h1><p>Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success).</p>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"alert alert-primary"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"alert"</span>&gt;</span>
  A simple primary alert—check it out!
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div></div><div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
</div>

<div class="color-block bg-gray-700 mb-3 pt-4 px-3">
  <div class="alert alert-light" role="alert">
    A simple light alert—check it out!
  </div>
</div>

<hr>
<h2>Additional content</h2><p>Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>

<hr>
<h2>Dismissible</h2><p>Using the alert JavaScript plugin, it’s possible to dismiss any alert inline.</p>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"alert alert-warning alert-dismissible fade show"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"alert"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">strong</span>&gt;</span>Holy guacamole!<span class="hljs-tag">&lt;/<span class="hljs-title">strong</span>&gt;</span> You should check in on some of those fields below.
  <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"close"</span> <span class="hljs-attribute">data-dismiss</span>=<span class="hljs-value">"alert"</span> <span class="hljs-attribute">aria-label</span>=<span class="hljs-value">"Close"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">aria-hidden</span>=<span class="hljs-value">"true"</span>&gt;</span>&amp;times;<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></div>
      </section>
      <section class="ss-section" id="page-6">
        <h1>Badges</h1><p><h1>Example heading <span class="badge badge-secondary">New</span></h1></p>
<p><h2>Example heading <span class="badge badge-secondary">New</span></h2></p>
<p><h3>Example heading <span class="badge badge-secondary">New</span></h3></p>
<p><h4>Example heading <span class="badge badge-secondary">New</span></h4></p>
<p><h5>Example heading <span class="badge badge-secondary">New</span></h5></p>
<h6>Example heading <span class="badge badge-secondary">New</span></h6>

<p><span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-danger">Danger</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-light">Light</span>
<span class="badge badge-dark">Dark</span></p>

      </section>
      <section class="ss-section" id="borders">
        <h1>Borders</h1><hr>
<div class="box rounded-0 border-top border-primary mb-2">
      <h2 class="h4"><code>border-top border-primary</code></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
</div>

<div class="box rounded-0 border-bottom border-success border-2 mb-5">
      <h2 class="h4"><code>border-bottom border-success border-2</code></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
</div>

<div class="box rounded-0 border-left border-danger border-4 mb-4">
      <h2 class="h4"><code>border-left border-danger border-4</code></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
</div>
      </section>
      <section class="ss-section" id="cards">
        <h1>Cards</h1><p>Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization. Built with flexbox, they offer easy alignment and mix well with other Bootstrap components. They have no margin by default, so use spacing utilities as needed.</p>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card shadow"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">img</span> <span class="hljs-attribute">src</span>=<span class="hljs-value">"..."</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-img-top"</span> <span class="hljs-attribute">alt</span>=<span class="hljs-value">"..."</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-body"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">h5</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-title"</span>&gt;</span>Card title<span class="hljs-tag">&lt;/<span class="hljs-title">h5</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">p</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"card-text"</span>&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary"</span>&gt;</span>Go somewhere<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div><div class="row">
  <div class="col-md-4">
    <div class="card shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
      <div class="card-body">
        <h5 class="card-title">shadow-sm</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#39;s content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card shadow">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
      <div class="card-body">
        <h5 class="card-title">shadow</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#39;s content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card shadow-lg">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>
      <div class="card-body">
        <h5 class="card-title">shadow-lg</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#39;s content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
      </section>
      <section class="ss-section" id="carousel">
        <h1>Carousel</h1><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"carouselExampleIndicators"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel slide"</span> <span class="hljs-attribute">data-ride</span>=<span class="hljs-value">"carousel"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">ol</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel-indicators"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">li</span> <span class="hljs-attribute">data-target</span>=<span class="hljs-value">"#carouselExampleIndicators"</span> <span class="hljs-attribute">data-slide-to</span>=<span class="hljs-value">"0"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"active"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">li</span> <span class="hljs-attribute">data-target</span>=<span class="hljs-value">"#carouselExampleIndicators"</span> <span class="hljs-attribute">data-slide-to</span>=<span class="hljs-value">"1"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">li</span> <span class="hljs-attribute">data-target</span>=<span class="hljs-value">"#carouselExampleIndicators"</span> <span class="hljs-attribute">data-slide-to</span>=<span class="hljs-value">"2"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">ol</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel-inner"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel-item active"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">img</span> <span class="hljs-attribute">src</span>=<span class="hljs-value">"..."</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"d-block w-100"</span> <span class="hljs-attribute">alt</span>=<span class="hljs-value">"..."</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel-item"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">img</span> <span class="hljs-attribute">src</span>=<span class="hljs-value">"..."</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"d-block w-100"</span> <span class="hljs-attribute">alt</span>=<span class="hljs-value">"..."</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel-item"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">img</span> <span class="hljs-attribute">src</span>=<span class="hljs-value">"..."</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"d-block w-100"</span> <span class="hljs-attribute">alt</span>=<span class="hljs-value">"..."</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel-control-prev"</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#carouselExampleIndicators"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">data-slide</span>=<span class="hljs-value">"prev"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel-control-prev-icon"</span> <span class="hljs-attribute">aria-hidden</span>=<span class="hljs-value">"true"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"sr-only"</span>&gt;</span>Previous<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel-control-next"</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#carouselExampleIndicators"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">data-slide</span>=<span class="hljs-value">"next"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"carousel-control-next-icon"</span> <span class="hljs-attribute">aria-hidden</span>=<span class="hljs-value">"true"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"sr-only"</span>&gt;</span>Next<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </section>
      <section class="ss-section" id="dropdows">
        <h1>Dropdows</h1><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"dropdown"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary dropdown-toggle"</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"dropdownMenuButton"</span> <span class="hljs-attribute">data-toggle</span>=<span class="hljs-value">"dropdown"</span> <span class="hljs-attribute">aria-haspopup</span>=<span class="hljs-value">"true"</span> <span class="hljs-attribute">aria-expanded</span>=<span class="hljs-value">"false"</span>&gt;</span>
    Dropdown button
  <span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"dropdown-menu"</span> <span class="hljs-attribute">aria-labelledby</span>=<span class="hljs-value">"dropdownMenuButton"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"dropdown-item"</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span>&gt;</span>Action<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"dropdown-item"</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span>&gt;</span>Another action<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"dropdown-item"</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#"</span>&gt;</span>Something else here<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></div>
      </section>
      <section class="ss-section" id="forms">
        <h1>Forms</h1><p class="lead">Use forms to allow users to interact with the site and provide information to the company.</p>

<hr>
<h2>Form Example</h2><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">form</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"form-group"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">label</span> <span class="hljs-attribute">for</span>=<span class="hljs-value">"exampleInputEmail1"</span>&gt;</span>Email address<span class="hljs-tag">&lt;/<span class="hljs-title">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">input</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"email"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"form-control"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"exampleInputEmail1"</span> <span class="hljs-attribute">aria-describedby</span>=<span class="hljs-value">"emailHelp"</span> <span class="hljs-attribute">placeholder</span>=<span class="hljs-value">"Enter email"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">small</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"emailHelp"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"form-text text-muted"</span>&gt;</span>We'll never share your email with anyone else.<span class="hljs-tag">&lt;/<span class="hljs-title">small</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"form-group"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">label</span> <span class="hljs-attribute">for</span>=<span class="hljs-value">"exampleInputPassword1"</span>&gt;</span>Password<span class="hljs-tag">&lt;/<span class="hljs-title">label</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">input</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"password"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"form-control"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"exampleInputPassword1"</span> <span class="hljs-attribute">placeholder</span>=<span class="hljs-value">"Password"</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"custom-control custom-checkbox mb-3"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">input</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"checkbox"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"custom-control-input"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"customCheck1"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">label</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"custom-control-label"</span> <span class="hljs-attribute">for</span>=<span class="hljs-value">"customCheck1"</span>&gt;</span>Check this custom checkbox<span class="hljs-tag">&lt;/<span class="hljs-title">label</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"submit"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary mb-3"</span>&gt;</span>Submit<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">form</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
    <div class="custom-control custom-checkbox mb-3">
      <input type="checkbox" class="custom-control-input" id="customCheck1">
      <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
    </div>
  <button type="submit" class="btn btn-primary mb-3">Submit</button>
</form></div><hr>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
  </div>
  <div class="custom-control custom-radio mb-3">
    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Sign in</button>
</form>

<hr>
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="custom-control custom-checkbox">
      <input class="custom-control-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="custom-control-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
      </section>
      <section class="ss-section" id="modals">
        <h1>Modals</h1><div class="ss-code"><pre><code class="html"><span class="hljs-comment">&lt;!-- Button trigger modal --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary"</span> <span class="hljs-attribute">data-toggle</span>=<span class="hljs-value">"modal"</span> <span class="hljs-attribute">data-target</span>=<span class="hljs-value">"#exampleModal"</span>&gt;</span>
  Launch demo modal
<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>

<span class="hljs-comment">&lt;!-- Modal --&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"modal fade"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"exampleModal"</span> <span class="hljs-attribute">tabindex</span>=<span class="hljs-value">"-1"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"dialog"</span> <span class="hljs-attribute">aria-labelledby</span>=<span class="hljs-value">"exampleModalLabel"</span> <span class="hljs-attribute">aria-hidden</span>=<span class="hljs-value">"true"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"modal-dialog"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"document"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"modal-content"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"modal-header"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-title">h5</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"modal-title"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"exampleModalLabel"</span>&gt;</span>Modal title<span class="hljs-tag">&lt;/<span class="hljs-title">h5</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"close"</span> <span class="hljs-attribute">data-dismiss</span>=<span class="hljs-value">"modal"</span> <span class="hljs-attribute">aria-label</span>=<span class="hljs-value">"Close"</span>&gt;</span>
          <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">aria-hidden</span>=<span class="hljs-value">"true"</span>&gt;</span>&amp;times;<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
        <span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"modal-body"</span>&gt;</span>
        ...
      <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"modal-footer"</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-secondary"</span> <span class="hljs-attribute">data-dismiss</span>=<span class="hljs-value">"modal"</span>&gt;</span>Close<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
        <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"btn btn-primary"</span>&gt;</span>Save changes<span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
      <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div></div>
      </section>
      <section class="ss-section" id="tables">
        <h1>Tables</h1><p>Due to the widespread use of tables across third-party widgets like calendars and date pickers, we’ve designed our tables to be opt-in.</p>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">table</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"table"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">thead</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">th</span> <span class="hljs-attribute">scope</span>=<span class="hljs-value">"col"</span>&gt;</span>#<span class="hljs-tag">&lt;/<span class="hljs-title">th</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">th</span> <span class="hljs-attribute">scope</span>=<span class="hljs-value">"col"</span>&gt;</span>First<span class="hljs-tag">&lt;/<span class="hljs-title">th</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">th</span> <span class="hljs-attribute">scope</span>=<span class="hljs-value">"col"</span>&gt;</span>Last<span class="hljs-tag">&lt;/<span class="hljs-title">th</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">th</span> <span class="hljs-attribute">scope</span>=<span class="hljs-value">"col"</span>&gt;</span>Handle<span class="hljs-tag">&lt;/<span class="hljs-title">th</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">thead</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">tbody</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">th</span> <span class="hljs-attribute">scope</span>=<span class="hljs-value">"row"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-title">th</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">td</span>&gt;</span>Mark<span class="hljs-tag">&lt;/<span class="hljs-title">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">td</span>&gt;</span>Otto<span class="hljs-tag">&lt;/<span class="hljs-title">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">td</span>&gt;</span>@mdo<span class="hljs-tag">&lt;/<span class="hljs-title">td</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">th</span> <span class="hljs-attribute">scope</span>=<span class="hljs-value">"row"</span>&gt;</span>2<span class="hljs-tag">&lt;/<span class="hljs-title">th</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">td</span>&gt;</span>Jacob<span class="hljs-tag">&lt;/<span class="hljs-title">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">td</span>&gt;</span>Thornton<span class="hljs-tag">&lt;/<span class="hljs-title">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">td</span>&gt;</span>@fat<span class="hljs-tag">&lt;/<span class="hljs-title">td</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">tr</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">tr</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">th</span> <span class="hljs-attribute">scope</span>=<span class="hljs-value">"row"</span>&gt;</span>3<span class="hljs-tag">&lt;/<span class="hljs-title">th</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">td</span>&gt;</span>Larry<span class="hljs-tag">&lt;/<span class="hljs-title">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">td</span>&gt;</span>the Bird<span class="hljs-tag">&lt;/<span class="hljs-title">td</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">td</span>&gt;</span>@twitter<span class="hljs-tag">&lt;/<span class="hljs-title">td</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">tr</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">table</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table></div><hr>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<hr>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      </section>
      <section class="ss-section" id="tabs">
        <h1>Tabs</h1><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">ul</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"nav nav-tabs"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"myTab"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"tablist"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">li</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"nav-item"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"nav-link active"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"home-tab"</span> <span class="hljs-attribute">data-toggle</span>=<span class="hljs-value">"tab"</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#home"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"tab"</span> <span class="hljs-attribute">aria-controls</span>=<span class="hljs-value">"home"</span> <span class="hljs-attribute">aria-selected</span>=<span class="hljs-value">"true"</span>&gt;</span>Home<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">li</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"nav-item"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"nav-link"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"profile-tab"</span> <span class="hljs-attribute">data-toggle</span>=<span class="hljs-value">"tab"</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#profile"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"tab"</span> <span class="hljs-attribute">aria-controls</span>=<span class="hljs-value">"profile"</span> <span class="hljs-attribute">aria-selected</span>=<span class="hljs-value">"false"</span>&gt;</span>Profile<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">li</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"nav-item"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"nav-link"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"contact-tab"</span> <span class="hljs-attribute">data-toggle</span>=<span class="hljs-value">"tab"</span> <span class="hljs-attribute">href</span>=<span class="hljs-value">"#contact"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"tab"</span> <span class="hljs-attribute">aria-controls</span>=<span class="hljs-value">"contact"</span> <span class="hljs-attribute">aria-selected</span>=<span class="hljs-value">"false"</span>&gt;</span>Contact<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">li</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">ul</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tab-content"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"myTabContent"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tab-pane fade show active"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"home"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"tabpanel"</span> <span class="hljs-attribute">aria-labelledby</span>=<span class="hljs-value">"home-tab"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tab-pane fade"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"profile"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"tabpanel"</span> <span class="hljs-attribute">aria-labelledby</span>=<span class="hljs-value">"profile-tab"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tab-pane fade"</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"contact"</span> <span class="hljs-attribute">role</span>=<span class="hljs-value">"tabpanel"</span> <span class="hljs-attribute">aria-labelledby</span>=<span class="hljs-value">"contact-tab"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div><p><ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul></p>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam irure irure ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo nulla minim amet ipsum officia consectetur amet ullamco voluptate nisi commodo ea sit eu.
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet. Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.
  </div>
</div>
      </section>
      <section class="ss-section" id="box">
        <h1>Box</h1><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"box border"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">h2</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"h4"</span>&gt;</span>Simple box<span class="hljs-tag">&lt;/<span class="hljs-title">h2</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="box border">
      <h2 class="h4">Simple box</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
</div></div>
      </section>
      <section class="ss-section" id="messages">
        <h1>Messages</h1><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"alert fade show message primary mb-4 shadow"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"message-header"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">h2</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"message-title"</span>&gt;</span>Primary<span class="hljs-tag">&lt;/<span class="hljs-title">h2</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"close text-white"</span> <span class="hljs-attribute">data-dismiss</span>=<span class="hljs-value">"alert"</span> <span class="hljs-attribute">aria-label</span>=<span class="hljs-value">"Close"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">aria-hidden</span>=<span class="hljs-value">"true"</span>&gt;</span>&amp;times;<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"message-body"</span>&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="hljs-tag">&lt;<span class="hljs-title">strong</span>&gt;</span>Pellentesque risus mi<span class="hljs-tag">&lt;/<span class="hljs-title">strong</span>&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="hljs-tag">&lt;<span class="hljs-title">a</span>&gt;</span>felis venenatis<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span> efficitur. Aenean ac <span class="hljs-tag">&lt;<span class="hljs-title">em</span>&gt;</span>eleifend lacus<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="alert fade show message primary mb-4 shadow">
  <div class="message-header">
    <h2 class="message-title">Primary</h2>
    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div></div><div class="alert fade show message success mb-4 shadow">
  <div class="message-header">
    <p class="message-title">Success</p>
    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<div class="alert fade show message info mb-4 shadow">
  <div class="message-header">
    <p class="message-title">Info</p>
    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<div class="alert fade show message warning mb-4 shadow">
  <div class="message-header">
    <p class="message-title">Warning</p>
    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<div class="alert fade show message danger mb-4 shadow">
  <div class="message-header">
    <p class="message-title">Danger</p>
    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<hr>
<div class="message primary mb-4 shadow">
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<div class="message info mb-4 shadow">
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<div class="message success mb-4 shadow">
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<div class="message warning mb-4 shadow">
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<div class="message danger mb-4 shadow">
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<hr>
<h2>Size variations</h2><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"alert fade show message message-sm primary mb-4 shadow"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"message-header"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">p</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"message-title"</span>&gt;</span>Primary<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"close text-white"</span> <span class="hljs-attribute">data-dismiss</span>=<span class="hljs-value">"alert"</span> <span class="hljs-attribute">aria-label</span>=<span class="hljs-value">"Close"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">aria-hidden</span>=<span class="hljs-value">"true"</span>&gt;</span>&amp;times;<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"message-body"</span>&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="hljs-tag">&lt;<span class="hljs-title">strong</span>&gt;</span>Pellentesque risus mi<span class="hljs-tag">&lt;/<span class="hljs-title">strong</span>&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="hljs-tag">&lt;<span class="hljs-title">a</span>&gt;</span>felis venenatis<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span> efficitur. Aenean ac <span class="hljs-tag">&lt;<span class="hljs-title">em</span>&gt;</span>eleifend lacus<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="alert fade show message message-sm primary mb-4 shadow">
  <div class="message-header">
    <p class="message-title">Primary</p>
    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div></div><div class="message message-sm primary mb-4 shadow">
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>

<hr>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"alert fade show message message-lg primary mb-4 shadow"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"message-header"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">p</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"message-title"</span>&gt;</span>Primary<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">button</span> <span class="hljs-attribute">type</span>=<span class="hljs-value">"button"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"close text-white"</span> <span class="hljs-attribute">data-dismiss</span>=<span class="hljs-value">"alert"</span> <span class="hljs-attribute">aria-label</span>=<span class="hljs-value">"Close"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">aria-hidden</span>=<span class="hljs-value">"true"</span>&gt;</span>&amp;times;<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">button</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"message-body"</span>&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="hljs-tag">&lt;<span class="hljs-title">strong</span>&gt;</span>Pellentesque risus mi<span class="hljs-tag">&lt;/<span class="hljs-title">strong</span>&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="hljs-tag">&lt;<span class="hljs-title">a</span>&gt;</span>felis venenatis<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span> efficitur. Aenean ac <span class="hljs-tag">&lt;<span class="hljs-title">em</span>&gt;</span>eleifend lacus<span class="hljs-tag">&lt;/<span class="hljs-title">em</span>&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="alert fade show message message-lg primary mb-4 shadow">
  <div class="message-header">
    <p class="message-title">Primary</p>
    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div></div><hr>
<div class="message message-lg primary mb-4 shadow">
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</div>
      </section>
      <section class="ss-section" id="notifications">
        <h1>Notifications</h1><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"notification primary mb-3"</span>&gt;</span>
  Lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor. <span class="hljs-tag">&lt;<span class="hljs-title">strong</span>&gt;</span>Pellentesque risus mi<span class="hljs-tag">&lt;/<span class="hljs-title">strong</span>&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="hljs-tag">&lt;<span class="hljs-title">a</span>&gt;</span>felis venenatis<span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span> efficitur. Sit amet,
  consectetur adipiscing elit
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="notification primary mb-3">
  Lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
  consectetur adipiscing elit
</div></div><div class="notification info mb-3">
  Primar lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
  consectetur adipiscing elit
</div>

<div class="notification success mb-3">
  Primar lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
  consectetur adipiscing elit
</div>

<div class="notification warning mb-3">
  Primar lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
  consectetur adipiscing elit
</div>

<div class="notification danger mb-3">
  Primar lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
  consectetur adipiscing elit
</div>
      </section>
      <section class="ss-section" id="tags">
        <h1>Tags</h1><div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tags addons pt-2"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tag"</span>&gt;</span>Package<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tag primary"</span>&gt;</span>Subvitamine<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="tags addons pt-2">
  <span class="tag">Package</span>
  <span class="tag primary">Subvitamine</span>
</div></div><hr>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tags addons mr-3"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">span</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tag danger"</span>&gt;</span>Alex Smith<span class="hljs-tag">&lt;/<span class="hljs-title">span</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">a</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tag delete"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">a</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="tags addons mr-3">
  <span class="tag danger">Alex Smith</span>
  <a class="tag delete"></a>
</div></div><hr>
<div class="d-flex flex-wrap pt-2">

  <div class="tags addons mr-3">
    <span class="tag dark">npm</span>
    <span class="tag info">0.5.0</span>
  </div>

  <div class="tags addons">
    <span class="tag dark">build</span>
    <span class="tag success">passing</span>
  </div>

<p></div></p>
<hr>
<div class="d-flex flex-wrap pt-2">

  <div class="mr-3">
    <div class="tags addons">
      <a class="tag primary pointer">Technology</a>
      <a class="tag delete"></a>
    </div>
  </div>

  <div class="mr-3">
    <div class="tags addons">
      <a class="tag primary pointer">CSS</a>
      <a class="tag delete"></a>
    </div>
  </div>

  <div class="mr-3">
    <div class="tags addons">
      <a class="tag primary pointer">Flexbox</a>
      <a class="tag delete"></a>
    </div>
  </div>

  <div class="mr-3">
    <div class="tags addons">
      <a class="tag primary pointer">Web Design</a>
      <a class="tag delete"></a>
    </div>
  </div>

  <div class="mr-3">
    <div class="tags addons">
      <a class="tag primary pointer">Open Source</a>
      <a class="tag delete"></a>
    </div>
  </div>

  <div class="mr-3">
    <div class="tags addons">
      <a class="tag primary pointer">Community</a>
      <a class="tag delete"></a>
    </div>
  </div>

  <div>
    <div class="tags addons pointer">
      <a class="tag primary">Documentation</a>
      <a class="tag delete"></a>
    </div>
  </div>

<p></div></p>
<hr>

      </section>
      <section class="ss-section" id="tiles">
        <h1>Tiles</h1><p>A single tile element to build 2-dimensional Metro-like, Pinterest-like, or whatever-you-like grids</p>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tile ancestor"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tile parent vertical is-4"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tile child box border"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"h4"</span>&gt;</span>One<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tile child box border"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"h4"</span>&gt;</span>Two<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tile parent"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"tile child box border"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"h4"</span>&gt;</span>Three<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span>&gt;</span>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span>&gt;</span>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre></div>

<div class="ss-code-live"><div class="tile ancestor">
  <div class="tile parent vertical is-4">
    <div class="tile child box border">
      <p class="h4">One</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
    </div>
    <div class="tile child box border">
      <p class="h4">Two</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
    </div>
  </div>
  <div class="tile parent">
    <div class="tile child box border">
      <p class="h4">Three</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
      <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
      <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
    </div>
  </div>
</div></div><div class="columns">
    <div class="column">
      <div class="notification is-primary p-5 mt-2"></div>
    </div>
</div>

<div class="tile ancestor">
  <div class="tile parent">
    <article class="tile child box border">
      <p class="h3 title">Hello World</p>
      <p class="h5 subtitle">What is up?</p>
    </article>
  </div>
  <div class="tile parent">
    <article class="tile child box border">
      <p class="h3 title">Foo</p>
      <p class="h5 subtitle">Bar</p>
    </article>
  </div>
  <div class="tile parent">
    <article class="tile child box border">
      <p class="h3 title">Third column</p>
      <p class="h5 subtitle">With some content</p>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
      </div>
    </article>
  </div>
</div>

<div class="tile ancestor">
  <div class="tile vertical is-8">
    <div class="tile">
      <div class="tile parent vertical">
        <article class="tile child box border">
          <p class="h3 title">Vertical tiles</p>
          <p class="h5 subtitle">Top box</p>
        </article>
        <article class="tile child box border">
          <p class="h3 title">Vertical tiles</p>
          <p class="h5 subtitle">Bottom box</p>
        </article>
      </div>
      <div class="tile parent">
        <article class="tile child box border">
          <p class="h3 title">Middle box</p>
          <p class="h5 subtitle mb-3">With an image</p>
          <figure>
            <img class="img-fluid" src="/img/image.jpeg">
          </figure>
        </article>
      </div>
    </div>
    <div class="tile parent">
      <article class="tile child box border">
        <p class="h3 title">Wide column</p>
        <p class="h5 subtitle">Aligned with the right column</p>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="tile parent">
    <article class="tile child box border">
      <div class="content">
        <p class="h3 title">Tall column</p>
        <p class="h5 subtitle">With even more content</p>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
          <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
          <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
        </div>
      </div>
    </article>
  </div>
</div>

<div class="tile ancestor">
  <div class="tile parent">
    <article class="tile child box border">
      <p class="h3 title">Side column</p>
      <p class="h5 subtitle">With some content</p>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
      </div>
    </article>
  </div>
  <div class="tile parent is-8">
    <article class="tile child box border">
      <p class="h3 title">Main column</p>
      <p class="h5 subtitle">With some content</p>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
      </div>
    </article>
  </div>
</div>
      </section>
      <section class="ss-section" id="sections">
        <h1>Sections</h1><p>A simple container to divide your page into sections.</p>
<div class="ss-code"><pre><code class="html"><span class="hljs-tag">&lt;<span class="hljs-title">section</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"section bg-light"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"container"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">h1</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"title"</span>&gt;</span>section<span class="hljs-tag">&lt;/<span class="hljs-title">h1</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">h2</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"subtitle"</span>&gt;</span>
      A simple container to divide your page into <span class="hljs-tag">&lt;<span class="hljs-title">strong</span>&gt;</span>sections<span class="hljs-tag">&lt;/<span class="hljs-title">strong</span>&gt;</span>.
    <span class="hljs-tag">&lt;/<span class="hljs-title">h2</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">section</span>&gt;</span></code></pre></div>
      </section>
    </main>

  </div>

</div>

<section class="section bg-light">
  <div class="container">
    <h1 class="title">Section</h1>
    <h2 class="subtitle">
      A simple container to divide your page into <strong>sections</strong>.
    </h2>
  </div>
</section>

<section class="section is-medium">
  <div class="container">
    <h1 class="title">Section</h1>
    <h2 class="subtitle">
      A simple container to divide your page into <strong>sections</strong>.
    </h2>
  </div>
</section>

<section class="section bg-primary text-white is-large">
  <div class="container">
    <h1 class="display-4 title">Section</h1>
    <h2 class="h1 subtitle">
      A simple container to divide your page into <strong>sections</strong>.
    </h2>
  </div>
</section>

<footer class="bg-dark text-white text-center py-5">
  © 2019 • Subvitamine
</footer>

@endsection
