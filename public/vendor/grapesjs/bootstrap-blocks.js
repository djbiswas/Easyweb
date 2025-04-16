
document.addEventListener('DOMContentLoaded', function () {
    const editor = grapesjs.init({
        container: '#gjs',
        height: '500px',
        fromElement: false,
        storageManager: false
    });

    const bm = editor.BlockManager;

    // Basic text block
    bm.add('text', {
        label: 'Text',
        category: 'Basic',
        content: '<p class="lead">Start typing...</p>',
    });

    // Button block
    bm.add('button', {
        label: 'Button',
        category: 'Basic',
        content: '<a class="btn btn-primary" href="#">Click Me</a>',
    });

    // Hero block
    bm.add('hero', {
        label: 'Hero',
        category: 'Sections',
        content: `
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Hero Title</h1>
                    <p class="lead">This is a simple hero unit.</p>
                    <p><a href="#" class="btn btn-primary">Learn more</a></p>
                </div>
            </section>
        `
    });

    // Two-column layout block
    bm.add('2-cols', {
        label: '2 Columns',
        category: 'Layout',
        content: `
            <div class="row">
                <div class="col-md-6">Column 1</div>
                <div class="col-md-6">Column 2</div>
            </div>
        `
    });

    // Three-column layout block
    bm.add('3-cols', {
        label: '3 Columns',
        category: 'Layout',
        content: `
            <div class="row">
                <div class="col-md-4">One</div>
                <div class="col-md-4">Two</div>
                <div class="col-md-4">Three</div>
            </div>
        `
    });

    // Image + Text block
    bm.add('image-text', {
        label: 'Image + Text',
        category: 'Media',
        content: `
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>Image & Text</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        `
    });

    // Contact form block
    bm.add('contact-form', {
        label: 'Contact Form',
        category: 'Forms',
        content: `
            <form>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>
                <button class="btn btn-primary">Send</button>
            </form>
        `
    });

    // Save builder content to hidden input on form submit
    document.getElementById('page-form').addEventListener('submit', function () {
        document.getElementById('gjs-html').value = editor.getHtml();
    });
});
