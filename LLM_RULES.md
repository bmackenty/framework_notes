# 🧾 Daily Learning Notes System Specification (Updated)

**Framework**: CodeIgniter 4  
**Purpose**: Help teachers post structured, high-quality daily lessons, aligned to standards and goals, while managing courses, syllabi, weekly plans, and resources.

---

## 🎯 Core Features

### 📝 Daily Notes
- Rich text (WYSIWYG) content
- Linked to:
  - Course
  - Section
  - Date
- Taggable with:
  - Standards (many-to-many)
  - Concepts (many-to-many)
  - Differentiation Strategies (many-to-many)
  - Universal Tags (via polymorphic tagging)
- Linked resources (many-to-many)

### 📚 Courses
- Name, subject, academic year
- Summary, description, essential questions
- Can have multiple sections and syllabi

### 👥 Sections
- Each course may have multiple sections
- Fields:
  - Name (e.g., Period 1, Block A)
  - Assigned teacher
  - Days of week
  - Start/end time
  - Room
- Linked to daily notes and planning

### 📅 Syllabi
- Linked to course and academic year
- Version-controlled (multiple versions per course/year)
- Rich text content
- Only one active version per course/year

### 📋 Weekly Planning *(planned)*
- Fields:
  - Week number/date range
  - Goals, activities, assessments, standards
- Linked to daily notes and resources
- Drag-and-drop interface

### 📁 Resources
- Can be file uploads or external links
- Fields:
  - Title, type (file or link), description
  - File path or URL
  - Uploaded by (user)
- Global resource library (not tied to courses)
- Taggable (topics, grade levels, formats)

---

## 🧩 Taxonomy Tables

### ✅ `standards`
- Curriculum codes (e.g., IB.CS.2.1.2)
- Description and subject area
- Linked to daily notes (many-to-many)

### ✅ `concepts`
- Key themes (e.g., Systems, Form, Logic)
- Reusable across content
- Linked to daily notes

### ✅ `differentiation_strategies`
- Strategies like scaffolding, choice boards
- Linked to daily notes

---

## 🏷️ Universal Tagging System
- `tags`: Contains tag names and optional category
- `taggables`: Polymorphic pivot
  - Can tag `daily_notes`, `resources`, etc.

---

## 👨‍🏫 Users
- Roles: admin, teacher
- Teachers can:
  - Create/manage courses, sections, daily notes, syllabi
  - Upload and tag resources
- No student accounts or PII (GDPR-safe)

---

## ⚙️ Technical Architecture

### ✅ Database Tables (Implemented or Planned)

| Table                          | Description                          |
|-------------------------------|--------------------------------------|
| `users`                       | Teachers/admins                      |
| `courses`                     | Master course info                   |
| `academic_years`              | Academic years (e.g., 2024–25)       |
| `sections`                    | Course offerings with schedule       |
| `syllabi`                     | Rich, versioned course outlines      |
| `daily_notes`                 | Teacher-authored lesson notes        |
| `resources`                   | Files/links (not course-bound)       |
| `standards`, `concepts`, `differentiation_strategies` | Educational taxonomies |
| Pivot tables                  | For all many-to-many links           |
| `tags`, `taggables`           | Universal tagging system             |

---

## 🔐 Privacy & Security
- No student PII stored
- GDPR compliant
- Role-based access control
- Files uploaded securely to a restricted directory
- External links are validated/sanitized

---

## 🔌 Planned Integrations

### Moodle API (future)
- Push daily notes or plans to Moodle as forum posts or pages
- Import users/courses from Moodle
- View Moodle grades
