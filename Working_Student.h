#include <iostream>
#include <string>
#ifndef  Working_Student_H
#define  Working_Student_H
#include "Studen.h"
#include "Employee.h"
class Working_Student :public Student, public Employee:
{
private:
	bool same_institute;
public:
	Working_Student()
	{
		same_institute = 0;
	}
	Working_Student(const Working_Student &x)
	{
		same_institute = x.same_institute;
	~Working_Student() {};
	Working_Student(float x)
	{
		same_institute = x;
	}
	void setsame_institute(bool x) { same_institute = x; }
	bool getsame_institute() { return same_institute; }
};
#endif Working_Student_H