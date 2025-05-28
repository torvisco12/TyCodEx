$(document).ready(function() {
    // Load user preferences from localStorage
    loadUserPreferences();
    
    // Navigation - update to work with navbar
    $('.nav-link').click(function() {
        const sectionId = $(this).data('section');
        
        // Update active class for navbar
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
        
        // Show the corresponding section
        $('.section').removeClass('active');
        $('#' + sectionId).addClass('active');
        
        // Add animation to the active section
        $('#' + sectionId).addClass('fade-in');
        setTimeout(function() {
            $('#' + sectionId).removeClass('fade-in');
        }, 500);
        
        // On mobile, collapse the navbar after clicking
        if ($(window).width() < 992) {
            $('.navbar-toggler').click();
        }
        
        // Save the current section to localStorage
        localStorage.setItem('currentSection', sectionId);
    });
});

function loadUserPreferences() {
    // Load current section
    const currentSection = localStorage.getItem('currentSection');
    if (currentSection) {
        $('.nav-link').removeClass('active');
        $('.nav-link[data-section="' + currentSection + '"]').addClass('active');
        
        $('.section').removeClass('active');
        $('#' + currentSection).addClass('active');
    }
    
    // Load theme
    const theme = localStorage.getItem('theme') || 'light';
    $('#themeSelector').val(theme);
    applyTheme(theme);
}

function saveUserPreferences() {
    // Save theme
    localStorage.setItem('theme', $('#themeSelector').val());
    
    // Current section is saved when clicking on nav links
}

function applyTheme(theme) {
    const root = document.documentElement;
    
    // Reset to default
    root.style.setProperty('--primary-color', '#3498db');
    root.style.setProperty('--secondary-color', '#2c3e50');
    root.style.setProperty('--light-color', '#ecf0f1');
    root.style.setProperty('--dark-color', '#34495e');
    
    // Apply theme-specific changes
    if (theme === 'dark') {
        document.body.style.backgroundColor = '#2c3e50';
        document.body.style.color = '#ecf0f1';
        root.style.setProperty('--primary-color', '#3498db');
        root.style.setProperty('--secondary-color', '#1a252f');
        root.style.setProperty('--light-color', '#34495e');
        root.style.setProperty('--dark-color', '#1a252f');
        
        // Update card styles for dark theme
        $('.card').css('background-color', '#34495e');
        $('.card').css('color', '#ecf0f1');
        $('.list-group-item').css('background-color', '#34495e');
        $('.list-group-item').css('color', '#ecf0f1');
        $('.modal-content').css('background-color', '#34495e');
        $('.modal-content').css('color', '#ecf0f1');
        $('.section').css('background-color', '#2c3e50');
        $('.form-control, .form-select').css('background-color', '#2c3e50').css('color', '#ecf0f1').css('border-color', '#1a252f');
        $('.nav-tabs .nav-link').css('color', '#ecf0f1');
        $('.nav-tabs .nav-link.active').css('background-color', '#34495e').css('color', '#ecf0f1').css('border-color', '#34495e');
        $('.accordion-button').css('background-color', '#2c3e50').css('color', '#ecf0f1');
        $('.accordion-body').css('background-color', '#34495e').css('color', '#ecf0f1');
    } else if (theme === 'blue') {
        document.body.style.backgroundColor = '#e6f7ff';
        document.body.style.color = '#333';
        root.style.setProperty('--primary-color', '#0056b3');
        root.style.setProperty('--secondary-color', '#004085');
        root.style.setProperty('--light-color', '#cce5ff');
        root.style.setProperty('--dark-color', '#002752');
        
        // Reset card styles
        $('.card').css('background-color', '');
        $('.card').css('color', '');
        $('.list-group-item').css('background-color', '');
        $('.list-group-item').css('color', '');
        $('.modal-content').css('background-color', '');
        $('.modal-content').css('color', '');
        $('.section').css('background-color', '');
        $('.form-control, .form-select').css('background-color', '').css('color', '').css('border-color', '');
        $('.nav-tabs .nav-link').css('color', '');
        $('.nav-tabs .nav-link.active').css('background-color', '').css('color', '').css('border-color', '');
        $('.accordion-button').css('background-color', '').css('color', '');
        $('.accordion-body').css('background-color', '').css('color', '');
    } else {
        // Light theme (default)
        document.body.style.backgroundColor = '#f8f9fa';
        document.body.style.color = '#333';
        
        // Reset card styles
        $('.card').css('background-color', '');
        $('.card').css('color', '');
        $('.list-group-item').css('background-color', '');
        $('.list-group-item').css('color', '');
        $('.modal-content').css('background-color', '');
        $('.modal-content').css('color', '');
        $('.section').css('background-color', '');
        $('.form-control, .form-select').css('background-color', '').css('color', '').css('border-color', '');
        $('.nav-tabs .nav-link').css('color', '');
        $('.nav-tabs .nav-link.active').css('background-color', '').css('color', '').css('border-color', '');
        $('.accordion-button').css('background-color', '').css('color', '');
        $('.accordion-body').css('background-color', '').css('color', '');
    }
}

// Contact form submission simulation
function simulateFormSubmission() {
    // Simple validation
    const name = $('#contactName').val();
    const email = $('#contactEmail').val();
    const subject = $('#contactSubject').val();
    const message = $('#contactMessage').val();
    
    if (!name || !email || !subject || !message) {
        alert('Por favor completa todos los campos del formulario.');
        return;
    }
    
    // Show loading state
    const submitBtn = $('.contact-form button[type="button"]');
    const originalText = submitBtn.html();
    submitBtn.html('<i class="fas fa-spinner fa-spin me-2"></i> Enviando...');
    submitBtn.prop('disabled', true);
    
    // Simulate server request delay
    setTimeout(function() {
        // Reset form
        $('#contactName').val('');
        $('#contactEmail').val('');
        $('#contactSubject').val('');
        $('#contactMessage').val('');
        $('#contactConsent').prop('checked', false);
        
        // Reset button
        submitBtn.html(originalText);
        submitBtn.prop('disabled', false);
        
        // Show success message
        $('#successModal').modal('show');
    }, 1500);
}

// Simulate API responses for the prototype
function fetchTips(category) {
    return {
        status: 'success',
        message: 'This is a prototype, continue building to see the full version.',
        data: []
    };
}

function fetchProjects() {
    return {
        status: 'success',
        message: 'This is a prototype, continue building to see the full version.',
        data: []
    };
}

function fetchResources() {
    return {
        status: 'success',
        message: 'This is a prototype, continue building to see the full version.',
        data: []
    };
}

function generateProfileImage(style) {
    return {
        status: 'success',
        message: 'This is a prototype, continue building to see the full version.',
        imageUrl: null
    };
}
//buscador
function eliminarResaltado() {
    document.querySelectorAll("mark").forEach(el => {
        const text = document.createTextNode(el.textContent);
        el.parentNode.replaceChild(text, el);
        el.parentNode.normalize();
    });
}

function buscarEnPagina() {
    eliminarResaltado();
    const textoBuscar = document.getElementById("searchInput").value.trim();
    if (!textoBuscar) return;

    const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT, {
        acceptNode(node) {
            const tag = node.parentNode.tagName;
            return (["SCRIPT", "STYLE", "MARK"].includes(tag)) ? NodeFilter.FILTER_SKIP : NodeFilter.FILTER_ACCEPT;
        }
    });

    const regex = new RegExp(`(${textoBuscar})`, "gi");

    while (walker.nextNode()) {
        const node = walker.currentNode;
        if (regex.test(node.nodeValue)) {
            const span = document.createElement("span");
            span.innerHTML = node.nodeValue.replace(regex, '<mark>$1</mark>');
            node.parentNode.replaceChild(span, node);
        }
    }
}

document.getElementById("searchInput").addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
        buscarEnPagina();
    }
});


