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

