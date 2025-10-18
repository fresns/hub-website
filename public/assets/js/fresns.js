// Bootstrap Tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    var title = tooltipTriggerEl.getAttribute('title') || tooltipTriggerEl.getAttribute('data-bs-title');

    if (title) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    }
});

// Bootstrap Popovers
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));

var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    var content = popoverTriggerEl.getAttribute('data-bs-content') || popoverTriggerEl.getAttribute('data-bs-html');
    var placement = popoverTriggerEl.getAttribute('data-bs-placement') || 'auto';

    if (content) {
        return new bootstrap.Popover(popoverTriggerEl, {
            trigger: 'click',
            placement: placement,
            html: true,
            sanitize: false,
        });
    }
});

/* fresns token */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// tips
window.tips = function (message) {
    let html = `<div aria-live="polite" aria-atomic="true" class="position-fixed top-50 start-50 translate-middle" style="z-index:2048">
        <div class="toast align-items-center text-bg-warning border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">${message}</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>`;

    $('#fresns-tips').prepend(html);

    setTimeoutToastHide();
};

// set timeout toast hide
const setTimeoutToastHide = () => {
    $('.toast.show').each((k, v) => {
        setTimeout(function () {
            $(v).hide();
        }, 1500);
    });
};
setTimeoutToastHide();

// spinner
$(document).on('submit', 'form', function () {
    var btn = $(this).find('button[type="submit"]');
    btn.prop('disabled', true);
    if (0 === btn.children('.spinner-border').length) {
        btn.prepend(
            '<span class="spinner-border spinner-border-sm mg-r-5 d-none" role="status" aria-hidden="true"></span> '
        );
    }
    btn.children('.spinner-border').removeClass('d-none');
});
$(document).on('click', '.btn-spinner', function () {
    var btn = $(this);
    btn.prop('disabled', true);

    if (0 === btn.children('.spinner-border').length) {
        btn.prepend(
            '<span class="spinner-border spinner-border-sm mg-r-5 d-none" role="status" aria-hidden="true"></span> '
        );
    }

    btn.children('.spinner-border').removeClass('d-none');
});
