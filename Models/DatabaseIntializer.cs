using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace Project.Models
{
    public class DatabaseIntializer : DropCreateDatabaseIfModelChanges<DatabaseContext>
    {
        protected override void Seed(DatabaseContext context)
        {
            #region Adding Roles Data
                context.Roles.Add(new Role() { Title = "Dean"});
                context.Roles.Add(new Role() { Title = "Doctor" });
                context.Roles.Add(new Role() { Title = "Student" });
                context.Roles.Add(new Role() { Title = "Employee" });
            #endregion

            #region Adding Levels Data
                context.Levels.Add(new Level() { level = 1 });
                context.Levels.Add(new Level() { level = 2 });
                context.Levels.Add(new Level() { level = 3 });
                context.Levels.Add(new Level() { level = 4 });
            #endregion

            #region Adding Departments Data
                context.Departments.Add(new Department() { Title = "General" });
                context.Departments.Add(new Department() { Title = "Computer Science" });
                context.Departments.Add(new Department() { Title = "Information System" });
                context.Departments.Add(new Department() { Title = "Internet Technology" });
            #endregion

            #region Adding Students Data
                context.Students.Add(new Student()
                    {
                        User = new User()
                        {
                            SSN = "2643157512467",
                            FullName = "Mostafa Youssef Ramadan Taha",
                            Gender = true,
                            Birthday = DateTime.Parse("2000 - 01 - 12"),
                            Phone = "01278436951", Street = "Talbia", City = "Cairo", Country = "Egypt",
                            Email = "mostafa542@yahoo.com", Password = "mostafa542",
                            RoleID = 3
                        },
                        Lvl = 1,
                        MajorDepID = 1, MinorDepID = 1,
                        PaymentStatus = false
                    });
            #endregion

            #region Adding Doctors Data
                //context.Doctors.Add(new Doctor() {  });
            #endregion

            #region Adding Employees Data
                //context.Employees.Add(new Employee() {  });
            #endregion

            #region Adding Courses Data
                //context.Courses.Add(new Course() {  });
            #endregion
            
            base.Seed(context);
        }
    }
}