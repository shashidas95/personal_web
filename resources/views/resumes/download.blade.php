<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHASHI KANTA DAS - Resume</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-size: 12px;
        }

        .resume-container {
            width: 210mm;
            min-height: 297mm;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            display: flex;
            flex-direction: column;
            padding: 40px;
            box-sizing: border-box;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e0e0e0;
            margin-bottom: 20px;
            page-break-after: avoid;
        }

        .header h1 {
            font-family: 'Oswald', sans-serif;
            font-weight: 300;
            font-size: 2.5rem;
            letter-spacing: 5px;
            color: #333;
            margin: 0;
        }

        .header p {
            font-family: 'Oswald', sans-serif;
            font-weight: 200;
            font-size: 1.5rem;
            letter-spacing: 2px;
            color: #777;
            margin: 5px 0 0;
        }

        .contact-info {
            text-align: center;
            margin-bottom: 30px;
            page-break-after: avoid;
        }

        .contact-info p {
            display: inline-block;
            margin: 0 15px;
            font-size: 1rem;
            color: #555;
        }

        .contact-info .icon {
            margin-right: 5px;
            font-size: 1rem;
            color: #777;
        }

        .section {
            margin-bottom: 30px;
            page-break-inside: avoid;
        }

        .section-title {
            font-family: 'Oswald', sans-serif;
            font-weight: 500;
            font-size: 1.5rem;
            color: #444;
            letter-spacing: 1px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .timeline-item {
            margin-bottom: 20px;
            page-break-inside: avoid;
        }

        .timeline-item h3 {
            font-size: 1.25rem;
            font-weight: 500;
            color: #333;
            margin: 0;
        }

        .timeline-item h4 {
            font-size: 1rem;
            font-weight: 400;
            color: #777;
            margin: 2px 0;
        }

        .timeline-item p {
            font-size: 1rem;
            line-height: 1.4;
            color: #555;
            margin: 5px 0 0;
        }

        .work-experience .timeline-item {
            display: flex;
            flex-wrap: wrap;
            position: relative;
        }

        .work-experience .job-title-wrapper {
            flex: 1;
        }

        .work-experience .job-date {
            font-size: 1rem;
            font-weight: 500;
            color: #777;
            align-self: flex-start;
        }

        .work-experience ul {
            padding-left: 20px;
            margin: 5px 0 0;
            list-style-type: none;
            width: 100%;
        }

        .work-experience li {
            font-size: 1rem;
            color: #555;
            line-height: 1.4;
            margin-bottom: 5px;
            position: relative;
        }

        .work-experience li::before {
            content: '\2022';
            position: absolute;
            left: -15px;
            color: #555;
            font-size: 1rem;
        }

        /* Print styles */
        @media print {
            body {
                background-color: #ffffff !important;
                -webkit-print-color-adjust: exact;
                margin: 0;
                padding: 0;
                font-size: 12px;
            }

            .resume-container {
                width: 210mm;
                height: 297mm;
                box-shadow: none;
                border: none;
                padding: 0 40px;
            }

            .header,
            .contact-info,
            .section,
            .timeline-item {
                page-break-inside: avoid;
            }

            .section {
                padding: 0;
            }

            h1,
            h2,
            h3,
            h4,
            p,
            span,
            li {
                color: black !important;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="resume-container">
        {{-- This section is a placeholder to show how to structure the resume with your data. --}}
        {{-- You will need to replace the content with your own, or with Laravel variables --}}
        {{-- <div class="header">
            <h1>{{ $user->name }}SHASHI KANTA DAS</h1>
            <p>DEVOPS ENGINEER | CLOUD & AUTOMATION | KUBERNETES | CI/CD</p>
        </div> --}}

        <div class="header text-center mb-4">
            @if ($user->profile_image)
                <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-circle mb-3"
                    width="120" height="120">

                    <img src="{{ asset('storage/profile_image/shashi.jpg') }}" alt="Logo">
            @endif
            <h1>{{ strtoupper($user->name) ?? 'SHASHI KANTA DAS' }}</h1>
            <p>{{ strtoupper($user->job_title ?? 'DevOps Engineer | Cloud & Automation | Kubernetes | CI/CD') }}</p>
        </div>

        {{-- <div class="contact-info">
            <p><i class="fas fa-phone icon"></i> 01735431721</p>
            <p><i class="fas fa-envelope icon"></i> shashidas95@gmail.com</p>
            <p><i class="fas fa-map-marker-alt icon"></i> Dhaka, Bangladesh</p>
            <p><i class="fas fa-globe icon"></i> www.example.com</p>
        </div> --}}
        <div class="contact-info text-center mb-4">
            <p><i class="fas fa-phone"></i> {{ $user->phone ?? 'N/A' }}</p>
            <p><i class="fas fa-envelope"></i> {{ $user->email }}</p>
            <p><i class="fas fa-map-marker-alt"></i> {{ $user->address ?? 'N/A' }}</p>
            <p><i class="fas fa-globe"></i> {{ $user->website ?? 'www.example.com' }}</p>
        </div>

        <div class="section profile-summary">
            <h2 class="section-title">PROFILE SUMMARY</h2>
            <p>Experienced and results-driven DevOps Engineer with a proven track record in developing and executing
                successful automation strategies. Seeking a challenging role where I can contribute my skills in
                strategic planning, team leadership, and creative problem-solving to achieve business objectives.</p>
        </div>

        <div class="section work-experience">
            <h2 class="section-title">WORK EXPERIENCE</h2>

            @foreach ($user->resumes->where('type', 'experience') as $exp)
                <div class="timeline-item mb-3">
                    <div class="job-title-wrapper">
                        <h3>{{ $exp->company }}</h3>
                        <h4>{{ $exp->job_title }}</h4>
                    </div>
                    <span class="job-date">
                        {{ $exp->formatted_start_date }} - {{ $exp->formatted_end_date }}
                    </span>
                    <ul>
                        <li>{{ $exp->description }}</li>
                    </ul>
                </div>
            @endforeach


            {{-- <div class="timeline-item">
                <div class="job-title-wrapper">
                    <h3>TechSoft Ltd.</h3>
                    <h4>Senior Software Engineer</h4>
                </div>
                <span class="job-date">Jan 2022 - Present</span>
                <ul>
                    <li>Led a team of developers to build scalable web applications using Laravel and Vue.js. Designed
                        and implemented REST APIs for multiple modules.</li>
                    <li>Optimized database queries, improving performance by 30%. Integrated third-party services like
                        payment gateways and email APIs.</li>
                    <li>Performed code reviews to maintain high-quality code standards. Mentored junior developers and
                        conducted training sessions.</li>
                </ul>
            </div>
            <div class="timeline-item">
                <div class="job-title-wrapper">
                    <h3>CloudBridge Solutions</h3>
                    <h4>DevOps Engineer</h4>
                </div>
                <span class="job-date">Mar 2020 - Dec 2021</span>
                <ul>
                    <li>Implemented CI/CD pipelines using Jenkins, Docker, and Kubernetes. Automated server provisioning
                        with Ansible.</li>
                    <li>Managed cloud infrastructure on AWS, including EC2, S3, and RDS. Monitored application
                        performance and uptime using Prometheus and Grafana.</li>
                    <li>Improved deployment speed by 50% through automation. Configured logging and alerting for
                        production systems.</li>
                </ul>
            </div>
            <div class="timeline-item">
                <div class="job-title-wrapper">
                    <h3>NextGen IT</h3>
                    <h4>Software Engineer</h4>
                </div>
                <span class="job-date">Jan 2018 - Feb 2020</span>
                <ul>
                    <li>Developed web applications using PHP, Laravel, and JavaScript. Built REST APIs and integrated
                        with frontend frameworks.</li>
                    <li>Worked on database design and optimization using MySQL. Implemented user authentication and
                        authorization.</li>
                </ul>
            </div> --}}
        </div>

        <div class="section education">
            <h2 class="section-title">EDUCATION</h2>

            @foreach ($user->resumes->where('type', 'education') as $edu)
                <div class="timeline-item mb-3">
                    <h3> {{ $edu->formatted_start_date }} - {{ $edu->formatted_end_date }}/h3>
                        <h4>{{ $edu->degree }} - {{ $edu->field_of_study }}</h4>
                        <p>{{ $edu->description }}</p>
                </div>
            @endforeach
        </div>
        {{-- <div class="timeline-item">
                <h3>Jan 2014 - Dec 2016</h3>
                <h4>M.Sc - Software Engineering</h4>
                <p>Master of Science completed with focus on Software Engineering.</p>
            </div>
            <div class="timeline-item">
                <h3>Jan 2010 - Dec 2013</h3>
                <h4>B.Sc - Computer Science</h4>
                <p>Bachelor of Science completed with focus on Computer Science.</p>
            </div> --}}
    </div>

    <div class="section projects">
        <h2 class="section-title">PROJECTS</h2>

        {{-- Projects --}}

        @foreach ($user->projects as $project)
            <div class="timeline-item mb-3">
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                <span class="job-date">
                    {{ $project->formatted_start_date }} - {{ $project->formatted_end_date }}
                    ({{ ucfirst($project->status) }})
                </span>
            </div>
        @endforeach

        {{-- <div class="timeline-item">
                <h3>E-Commerce Platform</h3>
                <p>Developed a full-stack e-commerce web app using Laravel, Vue.js, and MySQL with secure payment
                    gateway integration. The project included advanced product catalog features, shopping cart
                    functionality, order tracking, and a responsive design optimized for both mobile and desktop.</p>
                <span class="job-date">Jan 2020 - Dec 2020</span>
            </div>
            <div class="timeline-item">
                <h3>Hospital Management System</h3>
                <p>Built a hospital management system to handle appointments, billing, and patient records using Node.js
                    and MongoDB. The application streamlined doctor-patient interactions, allowing doctors to manage
                    schedules while patients could easily book and track appointments.</p>
                <span class="job-date">Feb 2021 - Nov 2021</span>
            </div>
            <div class="timeline-item">
                <h3>DevOps CI/CD Pipeline</h3>
                <p>Implemented an automated CI/CD pipeline with Jenkins, Docker, and Kubernetes to streamline
                    deployments. The pipeline supported automated testing, linting, vulnerability scans, and rolling
                    deployments with zero downtime.</p>
                <span class="job-date">Mar 2023 - Present</span>
            </div> --}}
    </div>
    </div>
</body>

</html>
