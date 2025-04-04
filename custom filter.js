const companyUid = "C9.003"; 
const token = "9C3445513861D491D49445557DB30CF44551D49"; // Replace with your API token

const API_URL = `https://www.comeet.co/careers-api/2.0/company/${companyUid}/positions/?token=${token}&details=true`;

let allJobs = []; // Store all jobs to filter locally

// Fetch and display jobs from the API using AJAX
function fetchAndDisplayJobs(query = "", department = "", location = "") {
    $.get(API_URL, function(data) {
        allJobs = data; // Save the fetched jobs
        populateDepartmentDropdown(allJobs); // Populate department dropdown
        populateLocationDropdown(allJobs); // Populate location dropdown
        filterAndDisplayJobs(query, department, location); // Filter and display jobs based on query, department, and location
    }).fail(function() {
        console.error("Error fetching jobs.");
        $("#job-listings").html("Failed to load job data.");
    });
}

// Populate location dropdown with unique locations
function populateLocationDropdown(jobs) {
    const locationFilter = $("#LocationsFilter");
    const locations = new Set(); // Use a Set to avoid duplicate location values

    // Collect unique locations from all jobs
    jobs.forEach((job) => {
        if (job.location?.country) {
            locations.add(job.location?.country); // Add each location to the Set
        }
    });

    // Clear existing options (except the first one)
    locationFilter.empty();
    locationFilter.append('<option value="">Select Location</option>');

    // Add the unique location options to the dropdown
    locations.forEach((location) => {
        locationFilter.append(`<option value="${location}">${location}</option>`);
    });
}

// Populate department dropdown with unique departments
function populateDepartmentDropdown(jobs) {
    const departmentFilter = $("#departmentFilter");
    const departments = new Set(); // Use a Set to avoid duplicate department values

    // Collect unique departments from all jobs
    jobs.forEach((job) => {
        if (job.department) {
            departments.add(job.department); // Add each department to the Set
        }
    });

    // Clear existing options (except the first one)
    departmentFilter.empty();
    departmentFilter.append('<option value="">Select Department</option>');

    // Add the unique department options to the dropdown
    departments.forEach((department) => {
        departmentFilter.append(`<option value="${department}">${department}</option>`);
    });
}

// Filter jobs based on search query, department, and location
function filterAndDisplayJobs(query, department, location) {
    const jobListings = $("#job-listings");
    jobListings.empty(); // Clear existing listings

    // Filter jobs based on query (title, department, location)
    const filteredJobs = allJobs.filter((job) => {
        const jobTitle = job.name.toLowerCase();
        const jobDepartment = job.department?.toLowerCase() || "";
        const jobLocation = (job.location?.country || "").toLowerCase();
        // Check if query matches any of the fields
        const matchesQuery = jobTitle.includes(query.toLowerCase()) || jobDepartment.includes(query.toLowerCase()) || jobLocation.includes(query.toLowerCase());
        // Check if department matches
        const matchesDepartment = department ? jobDepartment === department.toLowerCase() : true;
        // Check if location matches
        const matchesLocation = location ? jobLocation === location.toLowerCase() : true;
        // Return true if all conditions are met
        return matchesQuery && matchesDepartment && matchesLocation;
    });

    // Display filtered jobs
    if (filteredJobs.length === 0) {
        jobListings.html("<p>No jobs found.</p>");
        return;
    }

    filteredJobs.forEach((job) => {
        const jobElement = $("<div>").addClass("job-listing");

        jobElement.html(`
          <h3 class="job-title">${job.name}</h3>
          <p class="job-department"><strong>Department:</strong> ${job.department || "N/A"}</p>
          <p class="job-location"><strong>Location:</strong> ${job.location?.country || "N/A"}</p>
          <p class="job-details"><strong>Email:</strong> <a href="mailto:${job.email}">${job.email}</a></p>
         <a href="job-listing.html?job=${job.uid}" target="_blank" class="view-job-details" data-job='${JSON.stringify(job.uid)}'>
          View Job Details
        </a>
        `);

        jobListings.append(jobElement);
    });
}

// Event listener for search input
$("#searchInput").on("input", function() {
    const query = $(this).val(); // Get the search query
    const department = $("#departmentFilter").val(); // Get the selected department
    const location = $("#LocationsFilter").val(); // Get the selected location
    filterAndDisplayJobs(query, department, location); // Filter jobs based on query, department, and location
});

// Event listener for department filter
$("#departmentFilter").on("change", function() {
    const department = $(this).val(); // Get the selected department
    const query = $("#searchInput").val(); // Get the search query
    const location = $("#LocationsFilter").val(); // Get the selected location
    filterAndDisplayJobs(query, department, location); // Filter jobs based on query, department, and location
});

// Event listener for location filter
$("#LocationsFilter").on("change", function() {
    const location = $(this).val(); // Get the selected location
    const query = $("#searchInput").val(); // Get the search query
    const department = $("#departmentFilter").val(); // Get the selected department
    filterAndDisplayJobs(query, department, location); // Filter jobs based on query, department, and location
});

// Initial fetch when the page loads
fetchAndDisplayJobs();
