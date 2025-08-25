# ☁️ Week 3: AWS Cloud Portfolio - Data Profiling, Lifecycle Rules & EC2 Uploads

## ✅ Objective
This week focuses on expanding cloud knowledge by utilizing **AWS Glue DataBrew**, **S3 Lifecycle Rules**, and **EC2 uploads using PowerShell**. The tasks aim to build a structured data pipeline and demonstrate automation in storage cost management and file uploads.

---

## 🛠️ Tools & Services Used
- **Amazon S3:** For storing raw academic data across structured folders.
- **AWS Glue DataBrew:** For profiling datasets and generating data quality reports.
- **EC2 Instance (Windows):** For secure PowerShell-based uploads.
- **S3 Lifecycle Configuration:** For setting intelligent archival transitions.
- **Remote Desktop (RDP):** For GUI access to EC2.

---

## 🎯 Activities Completed

### 1. ✅ **Created Clean Folder Structure in S3 Bucket**
- Created three core folders:
  - `academics/faculty-performance`
  - `academics/preliminary-feedback`
  - `academics/panel-members`
- Ensured standard naming and hierarchy for downstream profiling and access.

### 2. ✅ **Created DataBrew Profiles for Each Dataset**
- Profiled all three datasets:
  - `aca-fac-per-ds-lok`
  - `aca-pre-fed-ds-lok`
  - `aca-panel-mem-ds-lok`
- Analyzed structure:
  - **Total Rows:** 50
  - **Total Columns:** 10
  - Detected **nulls**, **data types**, and **correlations**

### 3. ✅ **Created & Ran DataBrew Recipe Jobs**
- Built transformation pipelines and generated cleansed outputs:
  - `aca-fac-per-cle-lok`
  - `aca-pre-fed-cle-lok`
  - `aca-panel-mem-cle-lok`
- Each recipe job completed successfully with outputs stored in S3.

### 4. ✅ **Configured S3 Lifecycle Rules for Cost Optimization**
- Applied 3 lifecycle rules:
  - `aca-fac-per-lr-lok` → Glacier Deep Archive
  - `aca-pre-fed-lr-lok` → Standard-IA
  - `aca-panel-mem-lr-lok` → Glacier Instant Retrieval
- Enabled automatic tiering to reduce storage costs.

### 5. ✅ **Launched EC2 Windows Instance for Secure File Uploads**
- Instance Type: `t3.micro`
- Successfully connected using Remote Desktop (RDP)

### 6. ✅ **Uploaded File from EC2 via PowerShell**
- Used the `write-s3object` command for structured upload:
  ```powershell
  write-s3object -bucket academics-raw-lok -file "C:\Users\Administrator\Documents\academics-user.txt" \
  -key "academics-user-log/year-2025/quarter01/month-01/day-28/server-ASVS-lok/academics-user.txt"
  ```

### 7. ✅ **Verified Upload in S3 Console**
- Confirmed successful upload with pathing and timestamped visibility.

### 8. ✅ **Completed AWS Academy Cloud Foundations Module 2 Knowledge Check**
- **Score Achieved:** 90%
- **Required:** 70%
- Result: Module successfully completed with high performance.

---

## 📦 Summary
Week 3 demonstrates an end-to-end pipeline in AWS:
- Data profiling → cleaning → cost optimization
- Infrastructure (EC2) leveraged for secure file operations
- Real-world S3 usage with automation, naming conventions, and backup policies
- Knowledge check performance validates conceptual understanding
![image11](https://github.com/user-attachments/assets/450e29d6-df25-45c9-a147-1bf1b0392c95)
![image10](https://github.com/user-attachments/assets/c9e473bf-8c1d-4406-b429-2a40aa4007c0)
![image9](https://github.com/user-attachments/assets/b2a3057a-cacf-4d02-972e-7d82062fe661)
![image8](https://github.com/user-attachments/assets/45a03a4d-85a0-4438-bad1-cf8af22af20a)
![image7](https://github.com/user-attachments/assets/a6d23d14-17b0-422b-bb29-e17d6e15127b)
![image6](https://github.com/user-attachments/assets/95477d48-cb4c-4916-84d7-c66ea116a052)
![image5](https://github.com/user-attachments/assets/4afe78b4-e434-444f-8a89-f94a328524b5)
![image4](https://github.com/user-attachments/assets/4e55d363-34f0-4917-9219-a13b72efb5c3)
![image3](https://github.com/user-attachments/assets/9e1abcbd-dda2-4d1a-8284-c8a3c833f56b)
![image2](https://github.com/user-attachments/assets/74a2324c-7194-48d2-9a50-d7b2694857f6)
![image1](https://github.com/user-attachments/assets/277a0b2f-e88a-456d-8667-fe680bee11ee)

---

**Prepared by:** Lokesh Kumar  
**Week:** 3  
**Portfolio:** AWS Cloud Computing
