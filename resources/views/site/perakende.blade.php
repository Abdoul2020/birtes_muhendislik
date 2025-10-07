@extends('site.master')

@section('title','Birtes Mühendislik - Perakende')

@section('meta_tags')
<!-- Primary Meta Tags -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Meta Title and Description -->
<title>Birtes Mühendislik - Perakende</title>
<meta name="title" content="Birtes Mühendislik - Perakende">
<meta name="description" content="Birtes Mühendislik - Perakende Hizmetleri">
<meta name="keywords" content="Birtes Mühendislik - Perakende">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://birtesmuhendislik.com/">
<meta property="og:title" content="Birtes Mühendislik - Perakende">
<meta property="og:description" content="Birtes Mühendislik - Perakende Hizmetleri">
<meta property="og:image" content="{{ asset('assets/site/img/logo_favicon.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="Birtes Mühendislik - Perakende">
<meta property="twitter:description" content="Birtes Mühendislik - Perakende Hizmetleri">
<meta property="twitter:image" content="{{ asset('assets/site/img/logo_favicon.png') }}">

@endsection

@section('styles')

<style>
    .perakende-hero {
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        position: relative;
        overflow: hidden;
    }

    .perakende-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="10" cy="60" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.3;
    }

    .hero-content {
        position: relative;
        z-index: 0;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1rem;
        opacity: 0;
        animation: slideInUp 1s ease 0.5s forwards;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 2rem;
        opacity: 0;
        animation: slideInUp 1s ease 0.7s forwards;
    }

    .breadcrumb {
        opacity: 0;
        animation: slideInUp 1s ease 0.8s forwards;
    }

    .breadcrumb-item {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumb-item:hover {
        color: white;
    }

    .breadcrumb-item.active {
        color: white;
        font-weight: 600;
    }

    /* Table Section Enhancements */
    .table-section {
        background: white;
        padding: 4rem 0;
    }

    .table-container {
        background: white;
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    .table-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .table-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2a3990;
        margin-bottom: 1rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .table-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
        border-radius: 2px;
    }

    .table-subtitle {
        color: #666;
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Enhanced Table Styles */
    .perakende-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-feature-settings: "liga" 1, "kern" 1;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .perakende-table thead {
        background: linear-gradient(135deg, #2a3990, #1e2a6b);
    }

    .perakende-table thead th {
        color: white;
        font-weight: 600;
        font-size: 1rem;
        padding: 1.5rem 1rem;
        text-align: left;
        border: none;
        position: relative;
    }

    .perakende-table thead th:first-child {
        border-top-left-radius: 15px;
    }

    .perakende-table thead th:last-child {
        border-top-right-radius: 15px;
    }

    .perakende-table tbody tr {
        transition: all 0.3s ease;
        border-bottom: 1px solid #f0f0f0;
    }

    .perakende-table tbody tr:hover {
        background: rgba(42, 57, 144, 0.05);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(42, 57, 144, 0.1);
    }

    .perakende-table tbody tr:last-child td:first-child {
        border-bottom-left-radius: 15px;
    }

    .perakende-table tbody tr:last-child td:last-child {
        border-bottom-right-radius: 15px;
    }

    .perakende-table tbody td {
        padding: 1.2rem 1rem;
        color: #333;
        font-size: 0.95rem;
        border: none;
        vertical-align: middle;
    }

    .perakende-table tbody tr:nth-child(even) {
        background: rgba(248, 249, 250, 0.5);
    }

    .perakende-table tbody tr:nth-child(even):hover {
        background: rgba(42, 57, 144, 0.08);
    }

    /* Table Controls */
    .table-controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .search-box {
        position: relative;
        flex: 1;
        max-width: 400px;
    }

    .search-input {
        width: 100%;
        padding: 12px 20px 12px 45px;
        border: 2px solid #e9ecef;
        border-radius: 25px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .search-input:focus {
        outline: none;
        border-color: #2a3990;
        background: white;
        box-shadow: 0 0 0 3px rgba(42, 57, 144, 0.1);
    }

    .search-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #666;
        font-size: 1.1rem;
    }

    .table-info {
        color: #666;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    /* Pagination */
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
        overflow-x: auto;
        padding: 1rem 0;
    }

    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
        gap: 0.3rem;
        min-width: max-content;
        flex-wrap: nowrap;
    }

    .pagination li {
        margin: 0;
        flex-shrink: 0;
    }

    .pagination a,
    .pagination span {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 35px;
        height: 35px;
        padding: 0 8px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        border: 1px solid transparent;
        white-space: nowrap;
    }

    .pagination a {
        color: #666;
        background: #f8f9fa;
        border-color: #e9ecef;
    }

    .pagination a:hover {
        color: #2a3990;
        background: rgba(42, 57, 144, 0.1);
        border-color: #2a3990;
        transform: translateY(-1px);
        box-shadow: 0 2px 8px rgba(42, 57, 144, 0.2);
    }

    .pagination .active span {
        color: white;
        background: #2a3990;
        border-color: #2a3990;
        box-shadow: 0 2px 8px rgba(42, 57, 144, 0.3);
    }

    /* Pagination responsive adjustments */
    @media (max-width: 768px) {
        .pagination-container {
            justify-content: flex-start;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .pagination {
            gap: 0.2rem;
        }

        .pagination a,
        .pagination span {
            min-width: 32px;
            height: 32px;
            font-size: 0.85rem;
            padding: 0 6px;
        }
    }

    /* Loading Animation */
    .loading-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 4rem;
    }

    .loading-spinner {
        width: 50px;
        height: 50px;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #2a3990;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Section Animations */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease;
    }

    .animate-on-scroll.animated {
        opacity: 1;
        transform: translateY(0);
    }

    /* Keyframe Animations */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }

        .table-container {
            padding: 2rem 1rem;
        }

        .table-title {
            font-size: 2rem;
        }

        .table-controls {
            flex-direction: column;
            align-items: stretch;
        }

        .search-box {
            max-width: none;
        }

        .perakende-table {
            font-size: 0.85rem;
        }

        .perakende-table thead th,
        .perakende-table tbody td {
            padding: 0.8rem 0.5rem;
        }
    }

    @media (max-width: 576px) {
        .perakende-table {
            font-size: 0.8rem;
        }

        .perakende-table thead th,
        .perakende-table tbody td {
            padding: 0.6rem 0.4rem;
        }
    }

    /* Loading Animation */
    .table-container {
        animation: fadeInUp 0.6s ease forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

@endsection

@section('content')

<div class="main-body container-xxl bg-white position-relative rounded-4 p-0 mb-lg-5">

    <section id="hero" class="perakende-hero py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="hero-content">
                        <h1 class="hero-title mt-5">
                            Perakende Projeleri
                        </h1>

                        <nav class="breadcrumb justify-content-center">
                            <a class="breadcrumb-item" href="/">
                                <i class="fas fa-home me-1"></i>Ana Sayfa
                            </a>
                            <span class="breadcrumb-item active" aria-current="page">
                                Perakende
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Table Section -->
    <section class="table-section">
        <div class="container">
            <div class="table-container animate-on-scroll">


                <!-- Table Controls -->
                <div class="table-controls">
                    <div class="search-box">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" id="searchInput" placeholder="Verilerde ara...">
                    </div>
                    <div class="table-info">
                        <span id="tableInfo">Toplam kayıt: <strong>0</strong></span>
                    </div>
                </div>

                <!-- Loading State -->
                <div id="loadingState" class="loading-container">
                    <div class="loading-spinner"></div>
                </div>

                <!-- Table Container -->
                <div id="tableContainer" style="display: none;" data-perakende="{{ json_encode($xlsData ?? []) }}">
                    <table class="perakende-table" id="perakendeTable">
                        <thead>
                            <tr>
                                <!-- Table headers will be populated dynamically -->
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table data will be populated dynamically -->
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="pagination-container">
                        <ul class="pagination" id="pagination">
                            <!-- Pagination will be populated dynamically -->
                        </ul>
                    </div>
                </div>

                <!-- No Data Message -->
                <div id="noDataMessage" style="display: none;" class="text-center py-5">
                    <i class="fas fa-exclamation-circle fa-3x text-muted mb-3"></i>
                    <h4 class="text-muted">Veri Bulunamadı</h4>
                    <p class="text-muted">Görüntülenecek perakende verisi bulunmamaktadır.</p>
                    <p class="text-muted small">Debug: Check console for data loading issues.</p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Load CSV data from server
        const tableContainer = document.getElementById('tableContainer');
        const xlsData = JSON.parse(tableContainer.getAttribute('data-perakende') || '[]');

        console.log('Data loaded:', xlsData);
        console.log('Data length:', xlsData.length);

        let currentData = [...xlsData];
        let filteredData = [...xlsData];
        let currentPage = 1;
        const itemsPerPage = 5;

        // Initialize the table
        function initializeTable() {
            console.log('initializeTable called');
            console.log('xlsData length:', xlsData.length);

            // Check if we have data
            if (xlsData.length === 0) {
                console.log('No data available, showing no data message');
                setTimeout(() => {
                    hideLoading();
                    showNoDataMessage();
                }, 1000);
                return;
            }

            setTimeout(() => {
                console.log('Timeout executed, hiding loading and populating table');
                hideLoading();
                populateTable();
                updateTableInfo();
                setupPagination();
            }, 1000);
        }

        // Debug: Log the loaded data
        console.log('CSV Data loaded:', xlsData);
        console.log('First row keys:', xlsData.length > 0 ? Object.keys(xlsData[0]) : 'No data');
        console.log('First row values:', xlsData.length > 0 ? xlsData[0] : 'No data');

        // Check if data is empty
        if (xlsData.length === 0) {
            console.warn('No CSV data found. Please check if perakende.csv exists and has data.');
        } else {
            console.log('Data loaded successfully. Total rows:', xlsData.length);
        }

        // Hide loading and show table
        function hideLoading() {
            document.getElementById('loadingState').style.display = 'none';
        }

        // Show no data message
        function showNoDataMessage() {
            document.getElementById('noDataMessage').style.display = 'block';
            document.getElementById('tableContainer').style.display = 'none';
        }

        // Populate table with data
        function populateTable() {
            const table = document.getElementById('perakendeTable');
            const thead = table.querySelector('thead tr');
            const tbody = table.querySelector('tbody');

            // Clear existing content
            thead.innerHTML = '';
            tbody.innerHTML = '';

            console.log('populateTable called with filteredData length:', filteredData.length);

            if (filteredData.length === 0) {
                console.log('No filtered data, showing no data message');
                showNoDataMessage();
                return;
            }

            // Show table container
            document.getElementById('tableContainer').style.display = 'block';
            document.getElementById('noDataMessage').style.display = 'none';

            // Create headers
            const headers = Object.keys(filteredData[0]);
            headers.forEach(header => {
                const th = document.createElement('th');
                let readableHeader = header
                    .replace(/_/g, ' ')
                    .replace(/([A-Z])/g, ' $1')
                    .trim()
                    .split(' ')
                    .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
                    .join(' ');

                th.textContent = readableHeader;
                thead.appendChild(th);
            });

            // Create rows for current page
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const pageData = filteredData.slice(startIndex, endIndex);

            pageData.forEach(row => {
                const tr = document.createElement('tr');
                headers.forEach(header => {
                    const td = document.createElement('td');
                    td.textContent = row[header];
                    tr.appendChild(td);
                });
                tbody.appendChild(tr);
            });
        }

        // Update table info
        function updateTableInfo() {
            const totalRecords = filteredData.length;
            const startIndex = (currentPage - 1) * itemsPerPage + 1;
            const endIndex = Math.min(currentPage * itemsPerPage, totalRecords);

            document.getElementById('tableInfo').innerHTML =
                `Toplam kayıt: <strong>${totalRecords}</strong> | Gösterilen: <strong>${startIndex}-${endIndex}</strong>`;
        }

        // Setup pagination
        function setupPagination() {
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            const totalPages = Math.ceil(filteredData.length / itemsPerPage);

            if (totalPages <= 1) return;

            // Previous button
            if (currentPage > 1) {
                const prevLi = document.createElement('li');
                prevLi.innerHTML = `<a href="#" onclick="changePage(${currentPage - 1})" title="Önceki Sayfa">‹</a>`;
                pagination.appendChild(prevLi);
            }

            // Calculate page range to show (max 7 pages)
            let startPage = Math.max(1, currentPage - 3);
            let endPage = Math.min(totalPages, currentPage + 3);

            // Adjust range if we're near the beginning or end
            if (endPage - startPage < 6) {
                if (startPage === 1) {
                    endPage = Math.min(totalPages, startPage + 6);
                } else if (endPage === totalPages) {
                    startPage = Math.max(1, endPage - 6);
                }
            }

            // First page and ellipsis
            if (startPage > 1) {
                const firstLi = document.createElement('li');
                firstLi.innerHTML = `<a href="#" onclick="changePage(1)">1</a>`;
                pagination.appendChild(firstLi);

                if (startPage > 2) {
                    const ellipsisLi = document.createElement('li');
                    ellipsisLi.innerHTML = `<span style="padding: 0 4px; color: #999;">...</span>`;
                    pagination.appendChild(ellipsisLi);
                }
            }

            // Page numbers in range
            for (let i = startPage; i <= endPage; i++) {
                const li = document.createElement('li');
                if (i === currentPage) {
                    li.innerHTML = `<span class="active">${i}</span>`;
                } else {
                    li.innerHTML = `<a href="#" onclick="changePage(${i})">${i}</a>`;
                }
                pagination.appendChild(li);
            }

            // Last page and ellipsis
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    const ellipsisLi = document.createElement('li');
                    ellipsisLi.innerHTML = `<span style="padding: 0 4px; color: #999;">...</span>`;
                    pagination.appendChild(ellipsisLi);
                }

                const lastLi = document.createElement('li');
                lastLi.innerHTML = `<a href="#" onclick="changePage(${totalPages})">${totalPages}</a>`;
                pagination.appendChild(lastLi);
            }

            // Next button
            if (currentPage < totalPages) {
                const nextLi = document.createElement('li');
                nextLi.innerHTML = `<a href="#" onclick="changePage(${currentPage + 1})" title="Sonraki Sayfa">›</a>`;
                pagination.appendChild(nextLi);
            }
        }

        // Change page function
        window.changePage = function(page) {
            currentPage = page;
            populateTable();
            updateTableInfo();
            setupPagination();
        };

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();

            if (searchTerm === '') {
                filteredData = [...currentData];
            } else {
                filteredData = currentData.filter(row => {
                    return Object.values(row).some(value =>
                        value.toString().toLowerCase().includes(searchTerm)
                    );
                });
            }

            currentPage = 1;
            populateTable();
            updateTableInfo();
            setupPagination();
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-on-scroll class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Add hover effects to table rows
        document.addEventListener('mouseover', function(e) {
            if (e.target.tagName === 'TD') {
                e.target.closest('tr').style.transform = 'translateY(-2px)';
            }
        });

        document.addEventListener('mouseout', function(e) {
            if (e.target.tagName === 'TD') {
                e.target.closest('tr').style.transform = 'translateY(0)';
            }
        });


        // Initialize the table
        initializeTable();

        // Add typing effect to hero title
        const heroTitle = document.querySelector('.hero-title');
        if (heroTitle) {
            const text = heroTitle.textContent;
            heroTitle.textContent = '';
            let i = 0;
            const typeWriter = () => {
                if (i < text.length) {
                    heroTitle.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 50);
                }
            };
            setTimeout(typeWriter, 1000);
        }
    });

    // Add CSS for ripple effect
    const style = document.createElement('style');
    style.textContent = `
    .ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }

    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    .perakende-table tbody tr {
        position: relative;
        overflow: hidden;
    }
`;
    document.head.appendChild(style);
</script>

@endsection