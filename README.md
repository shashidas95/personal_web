## About this project

### demo video limk: https://drive.google.com/file/d/1xy_W4AvYLNazccTuNXkyxbzDNjXUbjdO/view?usp=sharing

### Admin Login

user email: shashidas95@gmail.com
password: password

### Database files:

### Demo data for projects data

```bash
USE personal_web;

INSERT INTO projects (user_id, title, description, start_date, end_date, status, image_path, created_at, updated_at)
VALUES
(1, 'E-Commerce Platform',
 'Developed a full-stack e-commerce web app using Laravel, Vue.js, and MySQL with secure payment gateway integration. The project included advanced product catalog features, shopping cart functionality, order tracking, and a responsive design optimized for both mobile and desktop. Implemented user authentication with role-based access control, secure checkout with third-party payment APIs, and an admin dashboard for inventory and sales management. The system also included customer reviews, coupon management, and email notifications. Extensive testing and CI/CD pipelines ensured smooth deployments and reliability for high-traffic scenarios.',
 '2020-01-15', '2020-12-20', 'completed', '/images/projects/ecommerce.png', NOW(), NOW()),

(1, 'Hospital Management System',
 'Built a hospital management system to handle appointments, billing, and patient records using Node.js and MongoDB. The application streamlined doctor-patient interactions, allowing doctors to manage schedules while patients could easily book and track appointments. Billing and insurance claim modules were integrated with automated invoice generation. Developed secure electronic health records (EHR) with proper role-based access control for doctors, nurses, and administrative staff. Designed real-time dashboards for hospital administrators to monitor occupancy rates and patient flow. The system also supported SMS/email reminders for appointments and lab test results, improving patient satisfaction and hospital efficiency.',
 '2021-02-01', '2021-11-15', 'completed', '/images/projects/hms.png', NOW(), NOW()),

(1, 'Real-Time Chat Application',
 'Created a scalable chat app with WebSocket and Redis for instant messaging, user presence, and media sharing. Implemented features like one-to-one chat, group chat, typing indicators, message read receipts, and push notifications. Integrated file and image sharing with automatic compression and cloud storage support. Optimized performance to handle thousands of concurrent users with low latency. Added authentication and end-to-end encryption for secure communication. Built an admin panel to monitor active users and manage abusive content. Implemented load balancing strategies to ensure availability and failover handling, making the app robust for real-world usage.',
 '2022-01-10', '2022-07-30', 'completed', '/images/projects/chatapp.png', NOW(), NOW()),

(1, 'DevOps CI/CD Pipeline',
 'Implemented an automated CI/CD pipeline with Jenkins, Docker, and Kubernetes to streamline deployments. The pipeline supported automated testing, linting, vulnerability scans, and rolling deployments with zero downtime. Integrated monitoring with Prometheus and Grafana for observability, and logging with ELK stack for debugging. Containerized microservices for consistency across development, staging, and production environments. Automated infrastructure provisioning using Terraform and Ansible. Introduced Git branching strategies and pull request workflows to improve team collaboration. Set up alerting systems with Slack and email notifications, reducing MTTR and improving overall release quality and speed.',
 '2023-03-01', NULL, 'ongoing', '/images/projects/devops.png', NOW(), NOW()),

(1, 'AI-Powered Resume Builder',
 'Developed a resume builder that uses AI suggestions to improve job descriptions and formatting. The system leveraged natural language processing (NLP) to generate impactful sentences and keyword optimizations for applicant tracking systems (ATS). Integrated multiple resume templates with customizable sections such as education, work experience, projects, and skills. Added export options for PDF and DOCX formats with consistent styling. Provided real-time feedback on readability, grammar, and action verbs. Implemented user authentication with secure profile storage and resume history. Designed a recommendation engine that suggests improvements based on job descriptions, making it easier for users to tailor resumes to specific job applications.',
 '2024-05-01', NULL, 'planned', '/images/projects/resumeai.png', NOW(), NOW());


```

## demo data for resumes

```bash
user personal_web;-- Insert Job Experiences

INSERT INTO resumes (user_id, job_title, company, location, start_date, end_date, description, type, degree, field_of_study, created_at, updated_at)
VALUES
(1, 'Senior Software Engineer', 'TechSoft Ltd.', 'Dhaka, Bangladesh', '2022-01-01', NULL, 'Led a team of developers to build scalable web applications using Laravel and Vue.js.
Designed and implemented REST APIs for multiple modules.
Optimized database queries, improving performance by 30%.
Integrated third-party services like payment gateways and email APIs.
Performed code reviews to maintain high-quality code standards.
Mentored junior developers and conducted training sessions.
Implemented automated testing and CI/CD pipelines.
Collaborated with project managers and stakeholders for requirement analysis.
Resolved production issues and improved system reliability.
Documented architecture and coding standards for team reference.', 'experience', NULL, NULL, NOW(), NOW()),

(1, 'DevOps Engineer', 'CloudBridge Solutions', 'Chittagong, Bangladesh', '2020-03-01', '2021-12-31', 'Implemented CI/CD pipelines using Jenkins, Docker, and Kubernetes.
Automated server provisioning with Ansible.
Managed cloud infrastructure on AWS, including EC2, S3, and RDS.
Monitored application performance and uptime using Prometheus and Grafana.
Improved deployment speed by 50% through automation.
Configured logging and alerting for production systems.
Collaborated with development teams for environment standardization.
Enhanced security by implementing IAM roles and policies.
Documented deployment processes and operational guides.
Provided support for production incidents and troubleshooting.', 'experience', NULL, NULL, NOW(), NOW()),

(1, 'Software Engineer', 'NextGen IT', 'Sylhet, Bangladesh', '2018-01-01', '2020-02-28', 'Developed web applications using PHP, Laravel, and JavaScript.
Built REST APIs and integrated with frontend frameworks.
Worked on database design and optimization using MySQL.
Implemented user authentication and authorization.
Participated in Agile development sprints.
Collaborated with UI/UX designers for responsive design.
Wrote unit and integration tests for critical modules.
Deployed applications on shared and cloud servers.
Performed code reviews and maintained Git workflow.
Assisted in troubleshooting and debugging production issues.', 'experience', NULL, NULL, NOW(), NOW()),

(1, 'Backend Developer', 'InfoSys BD', 'Dhaka, Bangladesh', '2016-06-01', '2017-12-31', 'Built backend services using Node.js and Express.
Designed relational database schemas and optimized queries.
Developed APIs for mobile and web applications.
Implemented caching for faster response times.
Collaborated with frontend developers for data integration.
Managed server deployments and environment setup.
Ensured code quality with linting and testing.
Worked on authentication and session management.
Documented API endpoints for client use.
Participated in team code reviews and knowledge sharing.', 'experience', NULL, NULL, NOW(), NOW()),

(1, 'Intern Developer', 'Startup Hub', 'Dhaka, Bangladesh', '2015-01-01', '2016-05-31', 'Assisted in building small web applications using PHP and JavaScript.
Learned Agile methodologies and Scrum practices.
Wrote unit tests and documentation for small modules.
Collaborated with senior developers on project tasks.
Fixed bugs and enhanced existing code.
Participated in team meetings and sprint planning.
Gained experience in version control with Git.
Conducted research for new tools and technologies.
Tested features on different browsers and devices.
Prepared reports and presentations for team review.', 'experience', NULL, NULL, NOW(), NOW());


-- Insert Education Records
INSERT INTO resumes (user_id, job_title, company, location, start_date, end_date, description, type, degree, field_of_study, created_at, updated_at)
VALUES
(1, '', '', 'Dhaka University', '2014-01-01', '2016-12-31', 'Master of Science completed with focus on Software Engineering.', 'education', 'M.Sc', 'Software Engineering', NOW(), NOW());
(1, '', '', 'Dhaka University', '2010-01-01', '2013-12-31', 'Bachelor of Science completed with focus on Computer Science.', 'education', 'B.Sc', 'Computer Science', NOW(), NOW()),
(1, '', '', 'Dhaka College', '2008-01-01', '2010-12-31', 'Completed Higher Secondary Certificate with science specialization.', 'education', 'Higher Secondary', 'Science', NOW(), NOW()),


```

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

#
