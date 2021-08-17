
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BinarySearch
{
    class Program
    {
        static double F(double x)
        {
            return Math.Pow(0.1*x,3)-2*Math.Pow(x,2)+10*x ;
        }


        static void Main(string[] args)
        {
            int n = 0;
            double a, b, c = 0, e,x,x1,x2,f1,f2,fm;
            Console.Write("a= ");
            a=Convert.ToDouble(Console.ReadLine());
            Console.Write("b= ");
            b = Convert.ToDouble(Console.ReadLine());
            Console.Write("e= ");
            e = Convert.ToDouble(Console.ReadLine());

            if (a > b)
            {
                c = b;
                b = a;
                a = c;
            }
            
            while (Math.Abs(b-a)>2*e)
            {
                x = (a + b) / 2;
                x1 = x - e;
                x2 = x + e;
                f1 = F(x1);
                f2 = F(x2);
                if (f1 < f2)
                {
                    b = x;
                }
                else 
                {
                    a = x;
                }
                n++;                
            }
            x = (b + a) / 2;
            fm = F(x);

            Console.WriteLine($"x={x},f(x)={fm},n={n}");




            Console.ReadKey();
        }
    }
}
