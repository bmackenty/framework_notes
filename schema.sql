-- Schema for sections table
CREATE TABLE sections (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_id INT(11) UNSIGNED NOT NULL,
    name VARCHAR(100) NOT NULL,
    teacher_id INT(11) UNSIGNED,
    room VARCHAR(50),
    block VARCHAR(50),
    start_time TIME,
    end_time TIME,
    days_of_week VARCHAR(50),
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (teacher_id) REFERENCES users(id) ON DELETE SET NULL ON UPDATE CASCADE
);

-- Schema for daily_note_differentiation_strategies table
CREATE TABLE daily_note_differentiation_strategies (
    daily_note_id INT UNSIGNED NOT NULL,
    strategy_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (daily_note_id, strategy_id),
    FOREIGN KEY (daily_note_id) REFERENCES daily_notes(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (strategy_id) REFERENCES differentiation_strategies(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Schema for academic_years table
CREATE TABLE academic_years (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    label VARCHAR(100) NOT NULL,
    start_date DATE,
    end_date DATE,
    created_at DATETIME,
    updated_at DATETIME
);

-- Schema for statuses table
CREATE TABLE statuses (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    status_name VARCHAR(50) NOT NULL
);

-- Schema for standards table
CREATE TABLE standards (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    subject_area VARCHAR(100),
    created_at DATETIME,
    updated_at DATETIME
);