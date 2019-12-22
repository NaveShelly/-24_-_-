#pragma once
//Ben Michaeli 205569767
//Nave Shelly 312190796
//Coral Moyal 318855038
//Linoy Aslan 
#include "Student2.h"
#include "Employee2.h"
#include "WorkingStudent.h"

int main()
{
	Employee* PointEmp;
	Student* PointStudent;
	Person** PeArray;
	WorkingStudent *PointWorkS;
	int Amount = 0;
	int Choice = 0;
	int PersAmount = 0;
	int PersCount = 0;
	cout<<"How Many People You Want?\n";
	cin >> Amount;
	PeArray = new Person*[Amount];
	printf("Set The Type Of Object You Want:\n");
	printf("1.Person\n2.Employee\n3.Student\n4.WorkingStudent\n");
	cin >> Choice;

	while (Choice != 0||PersCount>Amount)
	{
		if (Choice == 1)
		{
			printf("Made New Person \n");
			PeArray[PersCount] = new Person();
			PeArray[PersCount]->Set();
			PersCount++;

		}
		if (Choice == 2)
		{
			printf("Made New Student \n");
			PeArray[PersCount] = new Student();
			PeArray[PersCount]->Set();
			PersCount++;
		}
		if (Choice == 3)
		{
			printf("Made New Employee \n");
			PeArray[PersCount] = new Employee();
			PeArray[PersCount]->Set();
			PersCount++;
		}
		if (Choice == 4)
		{
			WorkingStudent Ben;
			Ben.Set();
			//cout << "Made New Employee";
			//PeArray[PersCount] = new WorkingStudent();
			//PeArray[PersCount]->Set();
			//PersCount++;

		}
		cout << "Set Choice Again \n";
		cin >> Choice;
	}
	for (int i = 0; i < Amount; i++)
	{
		PointEmp = dynamic_cast <Employee*>(PeArray[i]);
		if (PointEmp)
		{
			cout << "Person in " << i << " Is Employee \n";
		}
		PointStudent = dynamic_cast<Student*>(PeArray[i]);
		if (PointStudent)
		{
			cout << "Person in " << i << " Is Student \n";
		}
		PointWorkS = dynamic_cast<WorkingStudent*>(PeArray[i]);
		if (PointWorkS)
		{
			cout << "Person in " << i << " Is WorkingStudent \n";
		}
	}

}