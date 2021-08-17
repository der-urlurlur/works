using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab3
{
    class Program
    {
        static double linear(double a0, double a1, double x) //линейная аппроксимация 
        {
            return a0 + a1 * x;
        }
        static double delta(double c1, double c2, double c4, double c6)
        {
            return 8 * (c2 * c6 - Math.Pow(c4, 2)) - c1 * (c1 * c6 - c2 * c4) + c2 * (c1 * c4 - Math.Pow(c2, 2));
        }        
        static double delta1(double c1, double c2, double c3, double c4, double c5, double c6, double c7)
        {
            return c3 * (c2 * c6 - c4 * c4) - c1 * (c5 * c6 - c4 * c7) + c2 * (c5 * c4 - c2 * c7);
        }
        static double delta2(double c1, double c2, double c3, double c4, double c5, double c6, double c7)
        {
            return (8 * c5 * c6 - 8 * c4 * c7 - c3 * c1 * c6 + c3 * c4 * c2 + c2 * c1 * c7 - c2 * c5 * c2);
        }
        static double delta3(double c1, double c2, double c3, double c4, double c5, double c6, double c7)
        {
            return (8 * c2 * c7 - 8 * c5 * c4 - c1 * c1 * c7 + c1 * c5 * c2 + c3 * c1 * c4 - c3 * c2 * c2);
        }
        static double quadr(double a0, double a1, double a2, double x)
        {
            return a0 + a1 * x + a2 * Math.Pow(x, 2);
        }
        static void Main(string[] args)
        {
            int n = 8;
            double[] x = new double[9] {1,4,17,23.3,31.3,39.3,47.3,55.3,63.3};
            double[] y = new double[9] {1.1,2.2,3.3,4.4,5.5,6.6,7.7,8.8,9.9};
            Console.WriteLine("\n Линейная аппроксимация: \n");
            double s1 = 0, s2 = 0, s3 = 0, s4 = 0; 
            for (int i = 0; i<x.Length; i++) //вычисление s1 и s3
            {
                s1 += x[i];
                s3 += Math.Pow(x[i], 2);
            }
            for (int i = 0; i<y.Length; i++) //вычисление s2 и s4
            {
                s2 += y[i];
                s4 += x[i] * y[i];
            }
            double a0 = (s2 * s3 - s1 * s4) / (n * s3 - Math.Pow(s1, 2));
            double a1 = (n * s4 - s1 * s2) / (n * s3 - Math.Pow(s1, 2)); 
            Console.WriteLine("s1= {0}, s2= {1}, s3= {2}, s4= {3}", s1, s2, s3, s4);
            Console.WriteLine("a0= {0}, a1= {1}", a0, a1);
            //выводнаэкранзначенияфункции
            for (int i = 0; i<x.Length; i++)
            {
                Console.WriteLine("x = " + x[i] + "\tf(x) = " + linear(a0, a1, x[i]));
            }
            Console.WriteLine("\n Квадратичная аппроксимация: \n");
            double c1 = s1, c2 = s3, c3 = s2, c4 = 0, c5 = s4, c6 = 0, c7 = 0; //c1 - x, c2 - x^2, c3 - y, c4 - x^3, c5 - x*y, c6 - x^4, c7 - x^2*y
            for (int i = 0; i < x.Length; i++)
            {
                c4 += Math.Pow(x[i], 3);
                c6 += Math.Pow(x[i], 4);
                c7 += (x[i] * x[i] * y[i]);
            }
            double A0 = delta1 (c1, c2, c3, c4, c5, c6, c7) / delta (c1, c2, c4, c6);
            double A1 = delta2 (c1, c2, c3, c4, c5, c6, c7) / delta (c1, c2, c4, c6);
            double A2 = delta3(c1, c2, c3, c4, c5, c6, c7) / delta(c1, c2, c4, c6);
            Console.WriteLine("s1= {0}, s2= {1}, s3= {2}, s4= {3}, s5 = {4}, s6 = {5}, s7 = {6}", c1, c2, c3, c4, c5, c6, c7);
            Console.WriteLine("a0= {0}, a1= {1}, a2 = {2}", A0, A1, A2);
            //вывод функции
            for (int i = 0; i < x.Length; i++)
            {
                Console.WriteLine("x = " + x[i] + "\tf(x) = " + quadr(A0, A1, A2, x[i]));
            }
        }
    }
}
