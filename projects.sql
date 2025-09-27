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
