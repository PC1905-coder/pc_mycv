-- Table for Personal Information
CREATE TABLE personal_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(10),
    bio TEXT
);

-- Table for Education
CREATE TABLE education (
    id INT AUTO_INCREMENT PRIMARY KEY,
    degree VARCHAR(100) NOT NULL,
    institution VARCHAR(100) NOT NULL,
    year_completed YEAR,
    description TEXT
);

-- Table for Work Experience
CREATE TABLE work_experience (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_title VARCHAR(100) NOT NULL,
    company VARCHAR(100) NOT NULL,
    start_date DATE,
    end_date DATE,
    description TEXT
);

-- Table for Skills
CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(100) NOT NULL
);

-- Table for Projects
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(100) NOT NULL,
    project_description TEXT,
    project_link VARCHAR(255)
);
