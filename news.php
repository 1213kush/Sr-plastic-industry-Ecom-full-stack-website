
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .news-tenders-section {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            
        }

        .vertical-line {
            width: 5px;
            background-color: blue;
            height: 100%;
        }

        .carousel-item -p{
            padding: 40px;
            background:rgba(70, 69, 69, 0.13);
            border: 1px solid #ddd;
            text-align: left;
        }

        .upload-section {
            display: none; /* Hidden for public, only admin can enable */
        }
    </style>
</head>
<body>

    <div class="row news-tenders-section">
        <!-- Latest News -->
        <div class="col-md-5">
            <h2>Latest News</h2>
            <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">News 1: New government policies <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item ">News 2: Stock markets hit record highs <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item">News 3: Tech industry advances in AI <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item">News 4: Upcoming business conferences <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item">News 5: New tax reforms announced <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item">News 6: Companies adopt green energy <a href="#" download>Download PDF</a></div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
            <!-- Admin Upload -->
            <div class="upload-section mt-3">
                <input type="file" id="newsPdfUpload" accept="application/pdf">
                <button onclick="uploadPdf('news')">Upload PDF</button>
            </div>
        </div>

        <!-- Vertical Line -->
        <div class="col-md-2 text-center">
            <div class="vertical-line mx-auto"></div>
        </div>

        <!-- Latest Tenders -->
        <div class="col-md-5">
            <h2>Latest Tenders</h2>
            <div id="tenderCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">Tender 1: Highway project <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item">Tender 2: IT security procurement <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item">Tender 3: Supply of raw materials <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item">Tender 4: School renovation <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item">Tender 5: Road repair contracts <a href="#" download>Download PDF</a></div>
                    <div class="carousel-item">Tender 6: Smart city development <a href="#" download>Download PDF</a></div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#tenderCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#tenderCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
            <!-- Admin Upload -->
            <div class="upload-section mt-3">
                <input type="file" id="tenderPdfUpload" accept="application/pdf">
                <button onclick="uploadPdf('tender')">Upload PDF</button>
            </div>
        </div>
    </div>
</div>

<script>
    function uploadPdf(type) {
        const fileInput = document.getElementById(`${type}PdfUpload`);
        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                const newItem = document.createElement("div");
                newItem.classList.add("carousel-item");
                newItem.innerHTML = `${file.name} <a href="${e.target.result}" download>Download PDF</a>`;
                document.querySelector(`#${type}Carousel .carousel-inner`).appendChild(newItem);
            };
            reader.readAsDataURL(file);
        }
    }
</script>

</body>
</html>
