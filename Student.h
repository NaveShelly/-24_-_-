#pragma once
#include "Person.h"
class Student : Person
{
	int Averge;
	string Institute;
public:
	Student()
	{
		Averge = 0;
		Institute = "NONE";
	}
	Student(const Student &N)
	{
		Person(N);
		Averge = N.Averge;
		Institute = N.Institute;

	}
	Student(Person P, int X, string I)
	{
		Person(P);
		Averge = X;
		Institute = I;
	}
	void SetStudent()
	{
		SetPerson();
		cout << "Set Averge \n";
		cin >> Averge;
		cout << "Set Institue \n";
		cin >> Institute;
	}
	int GetStudentAverge()
	{
		return Averge;
	}
	string GetStudentInstitue()
	{
		return Institute;
	}
};