CREATE OR REPLACE FORCE VIEW "ASMADB"."HR_VIEW_ADMIN" ("COMPLAIN_TYPE",  "EMPLOYEE_NAME", "COMPLAIN") AS 
  SELECT e.e_name, h.type ,h.complain

FROM employee e, hr h
WHERE h.e_id= e.e_id;
