#include <iostream>
#include <string>
#ifndef Employee_H
#define Employee_H
#include "person.h"
class Employee :public Person
{
private :
	float salary;
public:
	Employee()
	{
		salary = 0;
	}
	Employee(const Employee &x)
	{
		salary = x.salary;
	}
	~Employee() {};
	Employee(float x)
	{
		salary = x;
	}
	void setSalary(float x) { salary = x; }
	float getSalary() { return salary; } 
};
#endif