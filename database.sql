--- Azure SQL Database login system structure by childofcode.com ---
CREATE TABLE dbo.Login
   (UniqueID INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
    LoginUsername text NULL,
    LoginPassword text NULL,
    IPAddress text NULL,
    Permission varchar(100) NULL,
    LastLoginTime datetime2 NULL
    )  
GO 